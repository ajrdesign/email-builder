
Param(
    [string]$awsAccessKey       = "",
    [string]$awsSecretAccessKey = "",
    [string]$region = "",
    [string]$BambooPath = "",
    [string]$S3packageName = "",
    [string]$S3BucketName = "",
    [string]$S3KeyName = ""

)

If (-NOT ([Security.Principal.WindowsPrincipal][Security.Principal.WindowsIdentity]::GetCurrent()).IsInRole([Security.Principal.WindowsBuiltInRole] "Administrator"))
{    
  Echo "Warning!!!!! This script needs to be run As Admin and please open this script run as Administrator"
  Break
}

# make sure to load AWS powershell components
import-module "C:\Program Files (x86)\AWS Tools\PowerShell\AWSPowerShell\AWSPowerShell.psd1"

$creds = New-AWSCredentials -AccessKey $awsAccessKey -SecretKey $awsSecretAccessKey

$s3PackagePath = "$BambooPath/$S3PackageName"

if(Test-Path($s3PackagePath))
{
    
  $S3KeyFullPath = "$S3KeyName/$S3PackageName"

  "Uploading to $S3PackageName to S3....."
  Write-S3Object -BucketName $S3BucketName -Key $S3KeyFullPath -file $s3PackagePath -Credential $creds
  "${bamboo.system.aws.ToS3PackageName} has been uploaded successfully"
}else{
    write-host "### Error!!! $S3PackageName package doesn't exist and please check and try it agian!! ###"
    Exit(1)
}

