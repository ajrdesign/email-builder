Import-Module "C:\Program Files (x86)\AWS Tools\PowerShell\AWSPowerShell\AWSPowerShell.psd1"

#Adds all files of the specified type in a folder to S3

function S3-Upload { 
    [CmdletBinding()] 
    Param( 
        [Parameter(Mandatory=$true,ValueFromPipeline=$True)]  
        [String] 
        $BucketName,
         
        [Parameter(Mandatory=$true,ValueFromPipeline=$True)]  
        [String] 
        $Key,
         
        [Parameter(Mandatory=$true,ValueFromPipeline=$True)]  
        [String] 
        $AccessKey, 

        [Parameter(Mandatory=$true,ValueFromPipeline=$True)]  
        [String] 
        $Secret, 

        [Parameter(Mandatory=$true,ValueFromPipeline=$True)]  
        [String] 
        $path, 

        [Parameter(Mandatory=$true,ValueFromPipeline=$True)]  
        [String] 
        $type,

        [Parameter(Mandatory=$true,ValueFromPipeline=$True)]  
        [String] 
        $AWSRegion

    ) 
    begin  
    { 
        Set-AWSCredentials -AccessKey $AccessKey -Secret $Secret
        Set-DefaultAWSRegion -Region $AWSRegion -Verbose
    } 
    Process  
    { 
        Upload $bucketName $Key $path $type
    } 
    End { 
        Write-Host ("End upload") 
    } 
} 
function Upload([String] $s3bucket, [String] $key, [String] $path, [string]$type)
{
    #Get-ChildItem -Path $path -Filter *.$type | ForEach-Object { 
    #    $name = $_.Name -split -split '[\.]' -join '-' -replace "-$type",".$type"
    #    "Upload File " + $_.Fullname + " --> $name"
    #    Write-S3Object -BucketName $s3Bucket -Key $key/$name -File $_.Fullname -Verbose
    #}
    Get-ChildItem -Path $path -Filter *.$type -Recurse | ForEach-Object { 
        $file = $_ 
        $a = $_ -split -split '[\-]'
        if ($a -is [array] -and $a.Length -eq 2) {
           $file = $a[0] + "." + $type 
        }
        "Upload File $_ to $file"
        Write-S3Object -BucketName $s3Bucket -Key $key/$file -File $_.Fullname -Verbose        
  }
}