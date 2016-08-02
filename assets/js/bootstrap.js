/* ===================================================
 * bootstrap-transition.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#transitions
 * ===================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */


!function ($) {

  "use strict"; // jshint ;_;


  /* CSS TRANSITION SUPPORT (http://www.modernizr.com/)
   * ======================================================= */

  $(function () {

    $.support.transition = (function () {

      var transitionEnd = (function () {

        var el = document.createElement('bootstrap')
          , transEndEventNames = {
               'WebkitTransition' : 'webkitTransitionEnd'
            ,  'MozTransition'    : 'transitionend'
            ,  'OTransition'      : 'oTransitionEnd otransitionend'
            ,  'transition'       : 'transitionend'
            }
          , name

        for (name in transEndEventNames){
          if (el.style[name] !== undefined) {
            return transEndEventNames[name]
          }
        }

      }())

      return transitionEnd && {
        end: transitionEnd
      }

    })()

  })

}(window.jQuery);
/* ============================================================
 * bootstrap-dropdown.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#dropdowns
 * ============================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================ */


!function ($) {

  "use strict"; // jshint ;_;


 /* DROPDOWN CLASS DEFINITION
  * ========================= */

  var toggle = '[data-toggle=dropdown]'
    , Dropdown = function (element) {
        var $el = $(element).on('click.dropdown.data-api', this.toggle)
        $('html').on('click.dropdown.data-api', function () {
          $el.parent().removeClass('open')
        })
      }

  Dropdown.prototype = {

    constructor: Dropdown

  , toggle: function (e) {
      var $this = $(this)
        , $parent
        , isActive

      if ($this.is('.disabled, :disabled')) return

      $parent = getParent($this)

      isActive = $parent.hasClass('open')

      clearMenus()

      if (!isActive) {
        if ('ontouchstart' in document.documentElement) {
          // if mobile we we use a backdrop because click events don't delegate
          $('<div class="dropdown-backdrop"/>').insertBefore($(this)).on('click', clearMenus)
        }
        $parent.toggleClass('open')
      }

      $this.focus()

      return false
    }

  , keydown: function (e) {
      var $this
        , $items
        , $active
        , $parent
        , isActive
        , index

      if (!/(38|40|27)/.test(e.keyCode)) return

      $this = $(this)

      e.preventDefault()
      e.stopPropagation()

      if ($this.is('.disabled, :disabled')) return

      $parent = getParent($this)

      isActive = $parent.hasClass('open')

      if (!isActive || (isActive && e.keyCode == 27)) {
        if (e.which == 27) $parent.find(toggle).focus()
        return $this.click()
      }

      $items = $('[role=menu] li:not(.divider):visible a', $parent)

      if (!$items.length) return

      index = $items.index($items.filter(':focus'))

      if (e.keyCode == 38 && index > 0) index--                                        // up
      if (e.keyCode == 40 && index < $items.length - 1) index++                        // down
      if (!~index) index = 0

      $items
        .eq(index)
        .focus()
    }

  }

  function clearMenus() {
    $('.dropdown-backdrop').remove()
    $(toggle).each(function () {
      getParent($(this)).removeClass('open')
    })
  }

  function getParent($this) {
    var selector = $this.attr('data-target')
      , $parent

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
    }

    $parent = selector && $(selector)

    if (!$parent || !$parent.length) $parent = $this.parent()

    return $parent
  }


  /* DROPDOWN PLUGIN DEFINITION
   * ========================== */

  var old = $.fn.dropdown

  $.fn.dropdown = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('dropdown')
      if (!data) $this.data('dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  $.fn.dropdown.Constructor = Dropdown


 /* DROPDOWN NO CONFLICT
  * ==================== */

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  /* APPLY TO STANDARD DROPDOWN ELEMENTS
   * =================================== */

  $(document)
    .on('click.dropdown.data-api', clearMenus)
    .on('click.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.dropdown.data-api'  , toggle, Dropdown.prototype.toggle)
    .on('keydown.dropdown.data-api', toggle + ', [role=menu]' , Dropdown.prototype.keydown)

}(window.jQuery);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.3.1
 * http://getbootstrap.com/javascript/#scrollspy
 * ========================================================================
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    var process  = $.proxy(this.process, this)

    this.$body          = $('body')
    this.$scrollElement = $(element).is('body') ? $(window) : $(element)
    this.options        = $.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target || '') + ' .nav li > a'
    this.offsets        = []
    this.targets        = []
    this.activeTarget   = null
    this.scrollHeight   = 0

    this.$scrollElement.on('scroll.bs.scrollspy', process)
    this.refresh()
    this.process()
  }

  ScrollSpy.VERSION  = '3.3.1'

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
  }

  ScrollSpy.prototype.refresh = function () {
    var offsetMethod = 'offset'
    var offsetBase   = 0

    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = 'position'
      offsetBase   = this.$scrollElement.scrollTop()
    }

    this.offsets = []
    this.targets = []
    this.scrollHeight = this.getScrollHeight()

    var self     = this

    this.$body
      .find(this.selector)
      .map(function () {
        var $el   = $(this)
        var href  = $el.data('target') || $el.attr('href')
        var $href = /^#./.test(href) && $(href)

        return ($href
          && $href.length
          && $href.is(':visible')
          && [[$href[offsetMethod]().top + offsetBase, href]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        self.offsets.push(this[0])
        self.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.getScrollHeight()
    var maxScroll    = this.options.offset + scrollHeight - this.$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (this.scrollHeight != scrollHeight) {
      this.refresh()
    }

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
    }

    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null
      return this.clear()
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (!offsets[i + 1] || scrollTop <= offsets[i + 1])
        && this.activate(targets[i])
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    this.clear()

    var selector = this.selector +
        '[data-target="' + target + '"],' +
        this.selector + '[href="' + target + '"]'

    var active = $(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length) {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }

  ScrollSpy.prototype.clear = function () {
    $(this.selector)
      .parentsUntil(this.options.target, '.active')
      .removeClass('active')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.scrollspy

  $.fn.scrollspy             = Plugin
  $.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  $(window).on('load.bs.scrollspy.data-api', function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this)
      Plugin.call($spy, $spy.data())
    })
  })

}(jQuery);
/* ========================================================
 * bootstrap-tab.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#tabs
 * ========================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ======================================================== */


!function ($) {

  "use strict"; // jshint ;_;


 /* TAB CLASS DEFINITION
  * ==================== */

  var Tab = function (element) {
    this.element = $(element)
  }

  Tab.prototype = {

    constructor: Tab

  , show: function () {
      var $this = this.element
        , $ul = $this.closest('ul:not(.dropdown-menu)')
        , selector = $this.attr('data-target')
        , previous
        , $target
        , e

      if (!selector) {
        selector = $this.attr('href')
        selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
      }

      if ( $this.parent('li').hasClass('active') ) return

      previous = $ul.find('.active:last a')[0]

      e = $.Event('show', {
        relatedTarget: previous
      })

      $this.trigger(e)

      if (e.isDefaultPrevented()) return

      $target = $(selector)

      this.activate($this.parent('li'), $ul)
      this.activate($target, $target.parent(), function () {
        $this.trigger({
          type: 'shown'
        , relatedTarget: previous
        })
      })
    }

  , activate: function ( element, container, callback) {
      var $active = container.find('> .active')
        , transition = callback
            && $.support.transition
            && $active.hasClass('fade')

      function next() {
        $active
          .removeClass('active')
          .find('> .dropdown-menu > .active')
          .removeClass('active')

        element.addClass('active')

        if (transition) {
          element[0].offsetWidth // reflow for transition
          element.addClass('in')
        } else {
          element.removeClass('fade')
        }

        if ( element.parent('.dropdown-menu') ) {
          element.closest('li.dropdown').addClass('active')
        }

        callback && callback()
      }

      transition ?
        $active.one($.support.transition.end, next) :
        next()

      $active.removeClass('in')
    }
  }


 /* TAB PLUGIN DEFINITION
  * ===================== */

  var old = $.fn.tab

  $.fn.tab = function ( option ) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('tab')
      if (!data) $this.data('tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  $.fn.tab.Constructor = Tab


 /* TAB NO CONFLICT
  * =============== */

  $.fn.tab.noConflict = function () {
    $.fn.tab = old
    return this
  }


 /* TAB DATA-API
  * ============ */

  $(document).on('click.tab.data-api', '[data-toggle="tab"], [data-toggle="pill"]', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })

}(window.jQuery);
/* ==========================================================
 * bootstrap-affix.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#affix
 * ==========================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */


!function ($) {

  "use strict"; // jshint ;_;


 /* AFFIX CLASS DEFINITION
  * ====================== */

  var Affix = function (element, options) {
    this.options = $.extend({}, $.fn.affix.defaults, options)
    this.$window = $(window)
      .on('scroll.affix.data-api', $.proxy(this.checkPosition, this))
      .on('click.affix.data-api',  $.proxy(function () { setTimeout($.proxy(this.checkPosition, this), 1) }, this))
    this.$element = $(element)
    this.checkPosition()
  }

  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return

    var scrollHeight = $(document).height()
      , scrollTop = this.$window.scrollTop()
      , position = this.$element.offset()
      , offset = this.options.offset
      , offsetBottom = offset.bottom
      , offsetTop = offset.top
      , reset = 'affix affix-top affix-bottom'
      , affix

    if (typeof offset != 'object') offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function') offsetTop = offset.top()
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom()

    affix = this.unpin != null && (scrollTop + this.unpin <= position.top) ?
      false    : offsetBottom != null && (position.top + this.$element.height() >= scrollHeight - offsetBottom - (this.affixed === 'bottom' ? offsetTop : 0)) ?
      'bottom' : offsetTop != null && scrollTop <= offsetTop ?
      'top'    : false

    if (this.affixed === affix) return

    this.affixed = affix
    this.unpin = affix == 'bottom' ? position.top - scrollTop : null

    this.$element.removeClass(reset).addClass('affix' + (affix ? '-' + affix : ''))
  }


 /* AFFIX PLUGIN DEFINITION
  * ======================= */

  var old = $.fn.affix

  $.fn.affix = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('affix')
        , options = typeof option == 'object' && option
      if (!data) $this.data('affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $.fn.affix.Constructor = Affix

  $.fn.affix.defaults = {
    offset: 0
  }


 /* AFFIX NO CONFLICT
  * ================= */

  $.fn.affix.noConflict = function () {
    $.fn.affix = old
    return this
  }


 /* AFFIX DATA-API
  * ============== */

  $(window).on('load', function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this)
        , data = $spy.data()

      data.offset = data.offset || {}

      data.offsetBottom && (data.offset.bottom = data.offsetBottom)
      data.offsetTop && (data.offset.top = data.offsetTop)

      $spy.affix(data)
    })
  })


}(window.jQuery);
/* ==========================================================
 * bootstrap-alert.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#alerts
 * ==========================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */


!function ($) {

  "use strict"; // jshint ;_;


 /* ALERT CLASS DEFINITION
  * ====================== */

  var dismiss = '[data-dismiss="alert"]'
    , Alert = function (el) {
        $(el).on('click', dismiss, this.close)
      }

  Alert.prototype.close = function (e) {
    var $this = $(this)
      , selector = $this.attr('data-target')
      , $parent

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
    }

    $parent = $(selector)

    e && e.preventDefault()

    $parent.length || ($parent = $this.hasClass('alert') ? $this : $this.parent())

    $parent.trigger(e = $.Event('close'))

    if (e.isDefaultPrevented()) return

    $parent.removeClass('in')

    function removeElement() {
      $parent
        .trigger('closed')
        .remove()
    }

    $.support.transition && $parent.hasClass('fade') ?
      $parent.on($.support.transition.end, removeElement) :
      removeElement()
  }


 /* ALERT PLUGIN DEFINITION
  * ======================= */

  var old = $.fn.alert

  $.fn.alert = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('alert')
      if (!data) $this.data('alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  $.fn.alert.Constructor = Alert


 /* ALERT NO CONFLICT
  * ================= */

  $.fn.alert.noConflict = function () {
    $.fn.alert = old
    return this
  }


 /* ALERT DATA-API
  * ============== */

  $(document).on('click.alert.data-api', dismiss, Alert.prototype.close)

}(window.jQuery);
/* ============================================================
 * bootstrap-button.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#buttons
 * ============================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================ */


!function ($) {

  "use strict"; // jshint ;_;


 /* BUTTON PUBLIC CLASS DEFINITION
  * ============================== */

  var Button = function (element, options) {
    this.$element = $(element)
    this.options = $.extend({}, $.fn.button.defaults, options)
  }

  Button.prototype.setState = function (state) {
    var d = 'disabled'
      , $el = this.$element
      , data = $el.data()
      , val = $el.is('input') ? 'val' : 'html'

    state = state + 'Text'
    data.resetText || $el.data('resetText', $el[val]())

    $el[val](data[state] || this.options[state])

    // push to event loop to allow forms to submit
    setTimeout(function () {
      state == 'loadingText' ?
        $el.addClass(d).attr(d, d) :
        $el.removeClass(d).removeAttr(d)
    }, 0)
  }

  Button.prototype.toggle = function () {
    var $parent = this.$element.closest('[data-toggle="buttons-radio"]')

    $parent && $parent
      .find('.active')
      .removeClass('active')

    this.$element.toggleClass('active')
  }


 /* BUTTON PLUGIN DEFINITION
  * ======================== */

  var old = $.fn.button

  $.fn.button = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('button')
        , options = typeof option == 'object' && option
      if (!data) $this.data('button', (data = new Button(this, options)))
      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  $.fn.button.defaults = {
    loadingText: 'loading...'
  }

  $.fn.button.Constructor = Button


 /* BUTTON NO CONFLICT
  * ================== */

  $.fn.button.noConflict = function () {
    $.fn.button = old
    return this
  }


 /* BUTTON DATA-API
  * =============== */

  $(document).on('click.button.data-api', '[data-toggle^=button]', function (e) {
    var $btn = $(e.target)
    if (!$btn.hasClass('btn')) $btn = $btn.closest('.btn')
    $btn.button('toggle')
  })

}(window.jQuery);
/* =============================================================
 * bootstrap-collapse.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#collapse
 * =============================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================ */


!function ($) {

  "use strict"; // jshint ;_;


 /* COLLAPSE PUBLIC CLASS DEFINITION
  * ================================ */

  var Collapse = function (element, options) {
    this.$element = $(element)
    this.options = $.extend({}, $.fn.collapse.defaults, options)

    if (this.options.parent) {
      this.$parent = $(this.options.parent)
    }

    this.options.toggle && this.toggle()
  }

  Collapse.prototype = {

    constructor: Collapse

  , dimension: function () {
      var hasWidth = this.$element.hasClass('width')
      return hasWidth ? 'width' : 'height'
    }

  , show: function () {
      var dimension
        , scroll
        , actives
        , hasData

      if (this.transitioning || this.$element.hasClass('in')) return

      dimension = this.dimension()
      scroll = $.camelCase(['scroll', dimension].join('-'))
      actives = this.$parent && this.$parent.find('> .accordion-group > .in')

      if (actives && actives.length) {
        hasData = actives.data('collapse')
        if (hasData && hasData.transitioning) return
        actives.collapse('hide')
        hasData || actives.data('collapse', null)
      }

      this.$element[dimension](0)
      this.transition('addClass', $.Event('show'), 'shown')
      $.support.transition && this.$element[dimension](this.$element[0][scroll])
    }

  , hide: function () {
      var dimension
      if (this.transitioning || !this.$element.hasClass('in')) return
      dimension = this.dimension()
      this.reset(this.$element[dimension]())
      this.transition('removeClass', $.Event('hide'), 'hidden')
      this.$element[dimension](0)
    }

  , reset: function (size) {
      var dimension = this.dimension()

      this.$element
        .removeClass('collapse')
        [dimension](size || 'auto')
        [0].offsetWidth

      this.$element[size !== null ? 'addClass' : 'removeClass']('collapse')

      return this
    }

  , transition: function (method, startEvent, completeEvent) {
      var that = this
        , complete = function () {
            if (startEvent.type == 'show') that.reset()
            that.transitioning = 0
            that.$element.trigger(completeEvent)
          }

      this.$element.trigger(startEvent)

      if (startEvent.isDefaultPrevented()) return

      this.transitioning = 1

      this.$element[method]('in')

      $.support.transition && this.$element.hasClass('collapse') ?
        this.$element.one($.support.transition.end, complete) :
        complete()
    }

  , toggle: function () {
      this[this.$element.hasClass('in') ? 'hide' : 'show']()
    }

  }


 /* COLLAPSE PLUGIN DEFINITION
  * ========================== */

  var old = $.fn.collapse

  $.fn.collapse = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('collapse')
        , options = $.extend({}, $.fn.collapse.defaults, $this.data(), typeof option == 'object' && option)
      if (!data) $this.data('collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $.fn.collapse.defaults = {
    toggle: true
  }

  $.fn.collapse.Constructor = Collapse


 /* COLLAPSE NO CONFLICT
  * ==================== */

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old
    return this
  }


 /* COLLAPSE DATA-API
  * ================= */

  $(document).on('click.collapse.data-api', '[data-toggle=collapse]', function (e) {
    var $this = $(this), href
      , target = $this.attr('data-target')
        || e.preventDefault()
        || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
      , option = $(target).data('collapse') ? 'toggle' : $this.data()
    $this[$(target).hasClass('in') ? 'addClass' : 'removeClass']('collapsed')
    $(target).collapse(option)
  })

}(window.jQuery);
/* ==========================================================
 * bootstrap-carousel.js v2.3.2
 * http://getbootstrap.com/2.3.2/javascript.html#carousel
 * ==========================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */


!function ($) {

  "use strict"; // jshint ;_;


 /* CAROUSEL CLASS DEFINITION
  * ========================= */

  var Carousel = function (element, options) {
    this.$element = $(element)
    this.$indicators = this.$element.find('.carousel-indicators')
    this.options = options
    this.options.pause == 'hover' && this.$element
      .on('mouseenter', $.proxy(this.pause, this))
      .on('mouseleave', $.proxy(this.cycle, this))
  }

  Carousel.prototype = {

    cycle: function (e) {
      if (!e) this.paused = false
      if (this.interval) clearInterval(this.interval);
      this.options.interval
        && !this.paused
        && (this.interval = setInterval($.proxy(this.next, this), this.options.interval))
      return this
    }

  , getActiveIndex: function () {
      this.$active = this.$element.find('.item.active')
      this.$items = this.$active.parent().children()
      return this.$items.index(this.$active)
    }

  , to: function (pos) {
      var activeIndex = this.getActiveIndex()
        , that = this

      if (pos > (this.$items.length - 1) || pos < 0) return

      if (this.sliding) {
        return this.$element.one('slid', function () {
          that.to(pos)
        })
      }

      if (activeIndex == pos) {
        return this.pause().cycle()
      }

      return this.slide(pos > activeIndex ? 'next' : 'prev', $(this.$items[pos]))
    }

  , pause: function (e) {
      if (!e) this.paused = true
      if (this.$element.find('.next, .prev').length && $.support.transition.end) {
        this.$element.trigger($.support.transition.end)
        this.cycle(true)
      }
      clearInterval(this.interval)
      this.interval = null
      return this
    }

  , next: function () {
      if (this.sliding) return
      return this.slide('next')
    }

  , prev: function () {
      if (this.sliding) return
      return this.slide('prev')
    }

  , slide: function (type, next) {
      var $active = this.$element.find('.item.active')
        , $next = next || $active[type]()
        , isCycling = this.interval
        , direction = type == 'next' ? 'left' : 'right'
        , fallback  = type == 'next' ? 'first' : 'last'
        , that = this
        , e

      this.sliding = true

      isCycling && this.pause()

      $next = $next.length ? $next : this.$element.find('.item')[fallback]()

      e = $.Event('slide', {
        relatedTarget: $next[0]
      , direction: direction
      })

      if ($next.hasClass('active')) return

      if (this.$indicators.length) {
        this.$indicators.find('.active').removeClass('active')
        this.$element.one('slid', function () {
          var $nextIndicator = $(that.$indicators.children()[that.getActiveIndex()])
          $nextIndicator && $nextIndicator.addClass('active')
        })
      }

      if ($.support.transition && this.$element.hasClass('slide')) {
        this.$element.trigger(e)
        if (e.isDefaultPrevented()) return
        $next.addClass(type)
        $next[0].offsetWidth // force reflow
        $active.addClass(direction)
        $next.addClass(direction)
        this.$element.one($.support.transition.end, function () {
          $next.removeClass([type, direction].join(' ')).addClass('active')
          $active.removeClass(['active', direction].join(' '))
          that.sliding = false
          setTimeout(function () { that.$element.trigger('slid') }, 0)
        })
      } else {
        this.$element.trigger(e)
        if (e.isDefaultPrevented()) return
        $active.removeClass('active')
        $next.addClass('active')
        this.sliding = false
        this.$element.trigger('slid')
      }

      isCycling && this.cycle()

      return this
    }

  }


 /* CAROUSEL PLUGIN DEFINITION
  * ========================== */

  var old = $.fn.carousel

  $.fn.carousel = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('carousel')
        , options = $.extend({}, $.fn.carousel.defaults, typeof option == 'object' && option)
        , action = typeof option == 'string' ? option : options.slide
      if (!data) $this.data('carousel', (data = new Carousel(this, options)))
      if (typeof option == 'number') data.to(option)
      else if (action) data[action]()
      else if (options.interval) data.pause().cycle()
    })
  }

  $.fn.carousel.defaults = {
    interval: 5000
  , pause: 'hover'
  }

  $.fn.carousel.Constructor = Carousel


 /* CAROUSEL NO CONFLICT
  * ==================== */

  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old
    return this
  }

 /* CAROUSEL DATA-API
  * ================= */

  $(document).on('click.carousel.data-api', '[data-slide], [data-slide-to]', function (e) {
    var $this = $(this), href
      , $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) //strip for ie7
      , options = $.extend({}, $target.data(), $this.data())
      , slideIndex

    $target.carousel(options)

    if (slideIndex = $this.attr('data-slide-to')) {
      $target.data('carousel').pause().to(slideIndex).cycle()
    }

    e.preventDefault()
  })

}(window.jQuery);
/* ==========================================================
 * Orphan header fix
 * ==========================================================
*/
$(window).ready(function() {
  var windowWidth = $( window ).width();
  //Checks to see if the window is of a certain length.
  if (windowWidth >= 480) {
    //Executes functino on each header item and lead but not on 'i' icon elements.
    $("h1, h2, h3, h4, h5, h6 .lead").not('i').each(function() {
      var wordArray = $(this).text().split(" ");
      if (wordArray.length > 1) {
        wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
        wordArray.pop();
        $(this).html(wordArray.join(" "));
      }
    });
  }
});
/* 
 * Boxer v1.10.2 - 2013-12-17 
 * A jQuery plugin for displaying images and content in a modal overlay. Part of the formstone library. 
 * http://www.benplum.com/formstone/boxer/ 
 * 
 * Copyright 2013 Ben Plum; MIT Licensed 
 */ 

/*
 * Boxer [Formstone Library]
 * @author Ben Plum
 * @version 1.10.2
 *
 * Copyright Â© 2013 Ben Plum <mr@benplum.com>
 * Released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
 */
 
;(function ($, window) {
  "use strict";
  
  // Default Options
  var options = {
    callback: $.noop,
    customClass: "",
    duration: 250,
    fixed: false,
    formatter: $.noop,
    height: 100,
    labels: {
      close: "Close",
      count: "of",
      next: "Next",
      previous: "Previous"
    },
    margin: 100,
    minHeight: 100,
    minWidth: 100,
    mobile: false,
    opacity: 0.75,
    retina: false,
    requestKey: "boxer",
    top: 0,
    videoRatio: 9 / 16,
    videoWidth: 600,
    width: 100
  };
  // Internal Data
  var data = {};
  
  // Mobile Detect
  var trueMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test((window.navigator.userAgent||window.navigator.vendor||window.opera));
  
  // Public Methods
  var pub = {
    
    // Set Defaults
    defaults: function(opts) {
      options = $.extend(options, opts || {});
      return $(this);
    },
    
    destroy: function() {
      _close();
      return $(this).off(".boxer");
    },
    
    resize: function(e /* , height, width */) { 
      // removing custom size support - will return later
      if (typeof data.$boxer !== "undefined") {
        if (data.type === "element") {
          _sizeContent(data.$content.find(">:first-child"));
        } else if (data.type === "image") {
          _sizeImage(0);
        } else if (data.type === "video") {
          _sizeVideo();
        }
        _size();
      }
      
      return $(this);
    }
  };
  
  // Initialize
  function _init(opts) {
    options.formatter = _formatCaption;
    return $(this).on("click.boxer", $.extend({}, options, opts || {}), _build);
  }
  
  // Build Boxer
  function _build(e) {
    _killEvent(e);
    
    // Check target type
    var $target = $(this),
      $object = e.data.$object,
      source = ($target[0].attributes) ? $target.attr("href") || "" : "",
      checkExt = source.toLowerCase().split("."),
      extension = checkExt[ checkExt.length - 1 ],
      type = $target.data("type") || "";
    
    var isImage    = ( (type === "image") || (extension === "jpeg" || extension === "jpg" || extension === "gif" || extension === "png" || source.substr(0, 10) === "data:image") ),
      isVideo    = ( source.indexOf("youtube.com/embed") > -1 || source.indexOf("player.vimeo.com/video") > -1 ),
      isUrl      = ( (type === "url") || (!isImage && !isVideo && source.substr(0, 4) === "http") ),
      isElement  = ( (type === "element") || (!isImage && !isVideo && !isUrl && source.substr(0, 1) === "#") ),
      isObject   = ( (typeof $object !== "undefined") );
    
    // Check if one already exists
    if ($("#boxer").length < 1 && (isImage || isVideo || isUrl || isElement || isObject)) {
      // Cache internal data
      data = {
        $window: $(window),
        $body: $("body"),
        $target: $target,
        $object: $object,
        visible: false,
        resizeTimer: null,
        touchTimer: null,
        gallery: {
          active: false
        },
        options: e.data,
        isMobile: ((trueMobile || e.data.mobile) /* && !isUrl */ && !isElement /* && !isObject */)
      };
      
      if (isImage) {
        data.type = "image";
      } else if (isVideo) {
        data.type = "video";
      } else {
        data.type = "element";
      }
      
      if (isImage || isVideo) {
        // Check for gallery
        var rel = data.$target.attr("rel");
        if (typeof rel !== "undefined" && rel !== false) {
          data.gallery.active = true;
          data.gallery.rel = rel;
          data.gallery.$items = $("a[rel= " + data.gallery.rel + "]");
          data.gallery.index = data.gallery.$items.index(data.$target);
          data.gallery.total = data.gallery.$items.length - 1;
        }
      }
      
      // Assemble HTML
      var html = '';
      if (!data.isMobile) {
        html += '<div id="boxer-overlay" class="' + data.options.customClass + '" style="opacity: 0"></div>';
      }
      html += '<div id="boxer" class="loading ' + data.options.customClass;
      if (data.isMobile) {
        html += ' mobile';
      }
      if (isUrl) {
        html += ' iframe';
      }
      if (isElement || isObject) {
        html += ' inline';
      }
      html += '" style="opacity: 0;';
      if (data.options.fixed === true) {
        html += ' position: fixed;';
      }
      html += '">';
      html += '<div class="boxer-container" style="';
      if (data.isMobile) {
        html += 'height: 100%; width: 100%';
      } else {
        html += 'height: ' + data.options.height + 'px; width: ' + data.options.width + 'px';
      }
      html += '">';
      html += '<div class="boxer-content" style="opacity: 0;">';
      if (isImage || isVideo) {
        html += '<div class="boxer-meta">';
        
        if (data.gallery.active) {
          html += '<div class="boxer-arrow previous">' + data.options.labels.previous + '</div>';
          html += '<div class="boxer-arrow next">' + data.options.labels.next + '</div>';
          html += '<p class="boxer-position"';
          if (data.gallery.total < 1) { 
            html += ' style="display: none;"'; 
          }
          html += '>';
          html += '<span class="current">' + (data.gallery.index + 1) + '</span> ' + data.options.labels.count + ' <span class="total">' + (data.gallery.total + 1) + '</span>';
          html += '</p>';
          html += '<div class="boxer-caption gallery">';
        } else {
          html += '<div class="boxer-caption">';
        }
        
        html += data.options.formatter.apply(data.$body, [data.$target]);
        html += '</div></div>'; // caption, meta
      }
      html += '</div></div></div>'; //container, content, boxer
      
      // Modify Dom
      data.$body.append(html);
      
      // Cache jquery objects
      data.$overlay = $("#boxer-overlay");
      data.$boxer = $("#boxer");
      data.$container = data.$boxer.find(".boxer-container");
      data.$content = data.$boxer.find(".boxer-content");
      data.$meta = data.$boxer.find(".boxer-meta");
      data.$position = data.$boxer.find(".boxer-position");
      data.$caption = data.$boxer.find(".boxer-caption");
      data.$arrows = data.$boxer.find(".boxer-arrow");
      data.$animatables = $("#boxer-overlay, #boxer, .boxer-container");
      data.paddingVertical = parseInt(data.$boxer.css("paddingTop"), 10) + parseInt(data.$boxer.css("paddingBottom"), 10);
      data.paddingHorizontal = parseInt(data.$boxer.css("paddingLeft"), 10) + parseInt(data.$boxer.css("paddingRight"), 10);
      
      // Center / update gallery
      _center();
      if (data.gallery.active) {
        _updatePagination();
      }
      
      // Bind events
      data.$window.on("resize.boxer", pub.resize)
            .on("keydown.boxer", _keypress);
      data.$body.on("touchstart.boxer click.boxer", "#boxer-overlay, #boxer .boxer-close", _close)
            .on("touchmove.boxer", _killEvent);
      
      if (data.gallery.active) {
        data.$boxer.on("touchstart.boxer click.boxer", ".boxer-arrow", _advanceGallery);
      }
      
      data.$overlay.stop().animate({ opacity: data.options.opacity }, data.options.duration);
      data.$boxer.stop().animate({ opacity: 1 }, data.options.duration, function() { 
        if (isImage) {
          _loadImage(source);
        } else if (isVideo) {
          _loadVideo(source);
        } else if (isUrl) {
          _loadURL(source);
        } else if (isElement) {
          _cloneElement(source);
        } else if (isObject) {
          _appendObject(data.$object);
        } else {
          $.error("BOXER: '" +  source + "' is not valid.");
        }
      });
    }
    if (isObject) {
      return data.$boxer;
    }
  }
  
  // Open boxer
  function _open() {
    var newLeft = 0,
      newTop = 0,
      arrowHeight = 0,
      durration = data.isMobile ? 0 : data.options.duration;
      
    if (!data.isMobile) {
      newLeft = (data.$window.width() - data.contentWidth - data.paddingHorizontal) / 2;
      newTop = (data.options.top <= 0) ? ((data.$window.height() - data.contentHeight - data.paddingVertical) / 2) : data.options.top;
      arrowHeight = data.$arrows.outerHeight();
      
      if (data.options.fixed !== true) {
        newTop += data.$window.scrollTop();
      }
      
      data.$arrows.css({ 
        marginTop: ((data.contentHeight - data.metaHeight - arrowHeight) / 2) 
      });
    }
    
    // 
    if (!data.visible && data.isMobile && data.gallery.active) {
      data.$content.on("touchstart.boxer", ".boxer-image", _touchStart);
    }
    
    if (data.isMobile || data.options.fixed) {
      data.$body.addClass("boxer-open");
    }
    
    data.$boxer.stop().animate({ left: newLeft, top: newTop }, durration);
    data.$container.show().stop().animate({ height: data.containerHeight, width: data.containerWidth }, durration, function(e) {
      data.$content.stop().animate({ opacity: 1 }, data.options.duration);
      data.$boxer.removeClass("loading")
             .find(".boxer-close").stop().animate({ opacity: 1 }, data.options.duration);
      
      data.visible = true;
      
      // Fire callback + event
      data.options.callback.apply(data.$boxer);
      data.$window.trigger("boxer.open");
      
      // Start preloading
      if (data.gallery.active) {
        _preloadGallery();
      }
    });
  }
  
  // Size Boxer
  function _size(animate) {
    animate = animate || false;
    
    if (data.visible) {
      var newLeft = 0,
        newTop = 0,
        arrowHeight = 0;
      
      if (!data.isMobile) {
        newLeft = (data.$window.width() - data.contentWidth - data.paddingHorizontal) / 2;
        newTop = (data.options.top <= 0) ? ((data.$window.height() - data.contentHeight - data.paddingVertical) / 2) : data.options.top;
        arrowHeight = data.$arrows.outerHeight();
        
        if (data.options.fixed !== true) {
          newTop += data.$window.scrollTop();
        }
        
        data.$arrows.css({ 
          marginTop: ((data.contentHeight - data.metaHeight - arrowHeight) / 2) 
        });
      }
      
      if (animate) {
        data.$boxer.stop().animate({ left: newLeft, top: newTop }, data.options.duration);
        data.$container.show().stop().animate({ height: data.containerHeight, width: data.containerWidth });
      } else {
        data.$boxer.css({ left: newLeft, top: newTop });
        data.$container.css({ height: data.containerHeight, width: data.containerWidth });
      }
    }
  }
  
  // Close boxer
  function _close(e) {
    _killEvent(e);
    
    if (typeof data.$animatables !== "undefined") {
      data.$animatables.stop().animate({ opacity: 0 }, data.options.duration, function() {
        $(this).remove();
      });
      
      _clearTimer(data.resizeTimer);
      
      // Clean up
      data.$window.off(".boxer");
      data.$body.off(".boxer")
            .removeClass("boxer-open");
      
      if (data.gallery.active) {
        data.$boxer.off(".boxer");
      }
      
      if (data.isMobile) {
        if (data.type === "image" && data.gallery.active) {
          data.$container.off(".boxer");
        }
      }
      
      data.$window.trigger("boxer.close");
      
      data = {};
    }
  }
  
  // Center boxer on resize
  function _center() {
    var newLeft = 0,
      newTop  = 0;
    
    if (!data.isMobile) {
      newLeft = (data.$window.width() - data.$boxer.width() - data.paddingHorizontal) / 2;
      newTop  = (data.options.top <= 0) ? ((data.$window.height() - data.$boxer.height() - data.paddingVertical) / 2) : data.options.top;
      
      if (data.options.fixed !== true) {
        newTop += data.$window.scrollTop();
      }
    }
    
    data.$boxer.css({ 
      left: newLeft, 
      top:  newTop 
    });
  }
  
  // Load new image
  function _loadImage(source) {
    // Cache current image
    data.$image = $("<img />");
    
    data.$image.one("load.boxer", function() {
      var naturalSize = _naturalSize(data.$image);
      
      data.naturalHeight = naturalSize.naturalHeight;
      data.naturalWidth  = naturalSize.naturalWidth;
      
      if (data.options.retina) {
        data.naturalHeight /= 2;
        data.naturalWidth  /= 2;
      }
      
      data.$content.prepend(data.$image);
      if (data.$caption.html() === "") { 
        data.$caption.hide(); 
      } else { 
        data.$caption.show(); 
      }
      
      // Size content to be sure it fits the viewport
      if (_sizeImage(0)) {
        _open();
      }
    }).attr("src", source)
      .addClass("boxer-image");
    
    // If image has already loaded into cache, trigger load event
    if (data.$image[0].complete || data.$image[0].readyState === 4) {
      data.$image.trigger("load");
    }
  }
  
  // Load new video
  function _loadVideo(source) {
    data.$videoWrapper = $('<div class="boxer-video-wrapper" />');
    data.$video = $('<iframe class="boxer-video" />');
    
    data.$video.attr("src", source)
           .addClass("boxer-video")
           .prependTo(data.$videoWrapper);
    
    data.$content.prepend(data.$videoWrapper);
    
    _sizeVideo();
    
    _open();
  }
  
  // Format caption
  function _formatCaption($target) {
    var title = $target.attr("title");
    return (title !== "" && title !== undefined) ? '<p class="caption">' + title + '</p>' : "";
  }
  
  // Resize image to fit in viewport
  function _sizeImage(count) {
    data.windowHeight = data.viewportHeight = (count === 0) ? data.$window.height() : data.windowHeight;
    data.windowWidth  = data.viewportWidth  = (count === 0) ? data.$window.width()  : data.windowWidth;
    
    data.imageHeight  = (count === 0) ? data.naturalHeight : data.$image.outerHeight();
    data.imageWidth   = (count === 0) ? data.naturalWidth  : data.$image.outerWidth();
    data.metaHeight   = (count === 0) ? 0 : data.metaHeight;
    
    if (count === 0) {
      data.ratioHorizontal = data.imageHeight / data.imageWidth;
      data.ratioVertical   = data.imageWidth  / data.imageHeight;
      
      data.isWide = (data.imageWidth > data.imageHeight);
    }
    
    // Double check min and max
    if (data.imageHeight < data.options.minHeight) {
      data.options.minHeight = data.imageHeight;
    }
    if (data.imageWidth < data.options.minWidth) {
      data.options.minWidth = data.imageWidth;
    }
    
    if (data.isMobile) {
      data.containerHeight = data.viewportHeight - data.paddingVertical;
      data.containerWidth  = data.viewportWidth  - data.paddingHorizontal;
      
      data.contentHeight = data.containerHeight - data.metaHeight;
      data.contentWidth  = data.containerWidth;
      
      data = _fitImage(data); 
      
      data.imageMarginTop  = (data.contentHeight - data.targetImageHeight) / 2;
      data.imageMarginLeft = (data.contentWidth  - data.targetImageWidth) / 2;
    } else {
      data.viewportHeight -= data.options.margin + data.paddingVertical + data.metaHeight;
      data.viewportWidth  -= data.options.margin + data.paddingHorizontal;
      
      data = _fitImage(data);
      
      data.containerHeight = data.contentHeight = data.targetImageHeight;
      data.containerWidth  = data.contentWidth  = data.targetImageWidth;
      
      data.imageMarginTop = 0;
      data.imageMarginLeft = 0;
    }
    
    // Modify DOM
    data.$content.css({ 
      height: (data.isMobile) ? data.contentHeight : "auto",
      width: data.contentWidth 
    });
    data.$meta.css({ 
      width: data.contentWidth 
    });
    data.$image.css({ 
      height: data.targetImageHeight, 
      width: data.targetImageWidth,
      marginTop:  data.imageMarginTop,
      marginLeft: data.imageMarginLeft
    });
    
    data.metaHeight = data.$meta.outerHeight(true);
    data.contentHeight += data.metaHeight;
    
    if (!data.isMobile) {
      data.containerHeight += data.metaHeight;
    }
    
    if (data.contentHeight > data.viewportHeight && count < 2) {
      return _sizeImage(count+1);
    }
    
    return true;
  }
  
  // Fit image to viewport
  function _fitImage(data) {
    var height = (data.isMobile) ? data.contentHeight - data.options.margin : data.viewportHeight,
      width  = (data.isMobile) ? data.contentWidth - data.options.margin  : data.viewportWidth;
    
    if (data.isWide) {
      //WIDE
      data.targetImageWidth  = width;
      data.targetImageHeight = data.targetImageWidth * data.ratioHorizontal;
      
      if (data.targetImageHeight > height) {
        data.targetImageHeight = height;
        data.targetImageWidth  = data.targetImageHeight * data.ratioVertical;
      }
    } else {
      //TALL
      data.targetImageHeight = height;
      data.targetImageWidth = data.targetImageHeight * data.ratioVertical;
      
      if (data.targetImageWidth > width) {
        data.targetImageWidth = width;
        data.targetImageHeight = data.targetImageWidth * data.ratioHorizontal;
      }
    }
    
    // MAX
    if (data.targetImageWidth > data.imageWidth || data.targetImageHeight > data.imageHeight) {
      data.targetImageWidth = data.imageWidth;
      data.targetImageHeight = data.imageHeight;
    }
    
    // MIN
    if (data.targetImageWidth < data.options.minWidth || data.targetImageHeight < data.options.minHeight) {
      if (data.targetImageWidth < data.options.minWidth) {
        data.targetImageWidth = data.options.minWidth;
        data.targetImageHeight = data.targetImageWidth * data.ratioHorizontal;
      } else {
        data.targetImageHeight = data.options.minHeight;
        data.targetImageWidth = data.targetImageHeight * data.ratioVertical;
      }
    }
    
    return data;
  }
  
  // Resize image to fit in viewport
  function _sizeVideo() {
    data.windowHeight = data.$window.height() - data.paddingVertical;
    data.windowWidth  = data.$window.width()  - data.paddingHorizontal;
    data.videoMarginTop = 0;
    data.videoMarginLeft = 0;
    
    if (data.isMobile) {
      data.$meta.css({ 
        width: data.windowWidth
      });
      data.metaHeight = data.$meta.outerHeight(true);
      
      data.contentHeight = data.windowHeight;
      data.contentWidth  = data.windowWidth;
      
      data.videoWidth  = data.windowWidth;
      data.videoHeight = data.videoWidth * data.options.videoRatio;
      
      if (data.videoHeight > data.windowHeight - data.metaHeight) {
        data.videoHeight = data.windowHeight - data.metaHeight;
        data.videoWidth  = data.videoHeight * data.options.videoRatio;
      }
      
      data.videoMarginTop = (data.contentHeight - data.videoHeight) / 2;
      data.videoMarginLeft = (data.contentWidth - data.videoWidth) / 2;
    } else {
      data.windowHeight -= data.options.margin;
      data.windowWidth  -= data.options.margin;
      
      data.videoWidth  = (data.options.videoWidth > data.windowWidth) ? data.windowWidth : data.options.videoWidth;
      data.videoHeight = data.videoWidth * data.options.videoRatio;
      
      data.contentHeight = data.videoHeight;
      data.contentWidth  = data.videoWidth;
    }
    
    data.$content.css({ 
      height: (data.isMobile) ? data.contentHeight : "auto",
      width: data.contentWidth 
    });
    data.$meta.css({ 
      width: data.contentWidth 
    });
    data.$videoWrapper.css({ 
      height: data.videoHeight, 
      width: data.videoWidth,
      marginTop: data.videoMarginTop,
      marginLeft: data.videoMarginLeft
    });
    
    if (!data.isMobile) {
      data.metaHeight = data.$meta.outerHeight(true);
      data.contentHeight = data.videoHeight + data.metaHeight;
    }
    
    data.containerHeight = data.contentHeight;
    data.containerWidth = data.contentWidth = data.videoWidth;
  }
  
  // Preload gallery
  function _preloadGallery(e) {
    var source = '';
    
    if (data.gallery.index > 0) {
      source = data.gallery.$items.eq(data.gallery.index - 1).attr("href");
      if (source.indexOf("youtube.com/embed") < 0 && source.indexOf("player.vimeo.com/video") < 0) {
        $('<img src="' + source + '">');
      }
    }
    if (data.gallery.index < data.gallery.total) {
      source = data.gallery.$items.eq(data.gallery.index + 1).attr("href");
      if (source.indexOf("youtube.com/embed") < 0 && source.indexOf("player.vimeo.com/video") < 0) {
        $('<img src="' + source + '">');
      }
    }
  }
  
  // Advance gallery
  function _advanceGallery(e) {
    _killEvent(e);
    
    // Click target
    var $arrow = $(this);
    
    if (!$arrow.hasClass("disabled")) {
      data.$boxer.addClass("loading");
      
      data.gallery.index += ($arrow.hasClass("next")) ? 1 : -1;
      if (data.gallery.index > data.gallery.total) {
        data.gallery.index = data.gallery.total;
      }
      if (data.gallery.index < 0) {
        data.gallery.index = 0;
      }
      
      data.$content.stop().animate({ opacity: 0 }, data.options.duration, function() {
        if (typeof data.$image !== 'undefined') {
          data.$image.remove();
        }
        if (typeof data.$videoWrapper !== 'undefined') {
          data.$videoWrapper.remove();
        }
        data.$target = data.gallery.$items.eq(data.gallery.index);
        
        data.$caption.html(data.options.formatter.apply(data.$body, [data.$target]));
        data.$position.find(".current").html(data.gallery.index + 1);
        
        var source = data.$target.attr("href"),
          isVideo = ( source.indexOf("youtube.com/embed") > -1 || source.indexOf("player.vimeo.com/video") > -1 );
        
        if (isVideo) {
          _loadVideo(source);
        } else {
          _loadImage(source);
        }
        _updatePagination();
      });
    }
  }
  
  // Update galery arrows
  function _updatePagination() {
    data.$arrows.removeClass("disabled");
    if (data.gallery.index === 0) { 
      data.$arrows.filter(".previous").addClass("disabled");
    }
    if (data.gallery.index === data.gallery.total) {
      data.$arrows.filter(".next").addClass("disabled");
    }
  }
  
  // Handle keypress in gallery
  function _keypress(e) {
    if (data.gallery.active && (e.keyCode === 37 || e.keyCode === 39)) {
      _killEvent(e);
      
      data.$arrows.filter((e.keyCode === 37) ? ".previous" : ".next").trigger("click");
    } else if (e.keyCode === 27) {
      data.$boxer.find(".boxer-close").trigger("click");
    }
  }
  
  // Clone inline element
  function _cloneElement(id) {
    var $clone = $(id).find(">:first-child").clone();
    _appendObject($clone);
  }
  
  // Load URL into iFrame
  function _loadURL(source) {
    source = source + ((source.indexOf("?") > -1) ? "&"+options.requestKey+"=true" : "?"+options.requestKey+"=true");
    var $iframe = $('<iframe class="boxer-iframe" src="' + source + '" />');
    _appendObject($iframe);
  }
  
  // Append jQuery object
  function _appendObject($obj) {
    data.$content.append($obj);
    _sizeContent($obj);
    _open();
  }
  
  // Size jQuery object
  function _sizeContent($object) {
    data.objectHeight     = $object.outerHeight(true);
    data.objectWidth      = $object.outerWidth(true);
    data.windowHeight     = data.$window.height() - data.paddingVertical;
    data.windowWidth      = data.$window.width() - data.paddingHorizontal;
    data.dataHeight       = data.$target.data("height");
    data.dataWidth        = data.$target.data("width");
    data.maxHeight        = (data.windowHeight < 0) ? options.minHeight : data.windowHeight;
    data.isIframe         = $object.is("iframe");
    data.objectMarginTop  = 0;
    data.objectMarginLeft = 0;
      
    if (!data.isMobile) {
      data.windowHeight -= data.options.margin;
      data.windowWidth  -= data.options.margin;
    }
    
    data.contentHeight = (data.dataHeight !== undefined) ? data.dataHeight : (data.isIframe) ? data.windowHeight : data.objectHeight;
    data.contentWidth  = (data.dataWidth !== undefined)  ? data.dataWidth  : (data.isIframe) ? data.windowWidth  : data.objectWidth;
    
    if (data.isIframe && data.isMobile) {
      data.contentHeight = data.windowHeight;
      data.contentWidth  = data.windowWidth;
    }
    
    data.containerHeight = data.contentHeight;
    data.containerWidth  = data.contentWidth;
    
    data.$content.css({ 
      height: data.contentHeight, 
      width:  data.contentWidth
    });
  }
  
  
  
  // Handle touch start
  function _touchStart(e) {
    _killEvent(e);
    _clearTimer(data.touchTimer);
    
    if (!data.isAnimating) {
      var touch = (typeof e.originalEvent.targetTouches !== "undefined") ? e.originalEvent.targetTouches[0] : null;
      data.xStart = (touch) ? touch.pageX : e.clientX;
      data.leftPosition = 0;
      
      data.touchMax = Infinity;
      data.touchMin = -Infinity;
      data.edge = data.contentWidth * 0.25;
      
      if (data.gallery.index === 0) {
        data.touchMax = 0;
      }
      if (data.gallery.index === data.gallery.total) {
        data.touchMin = 0;
      }
      
      data.$boxer.on("touchmove.boxer", _touchMove)
             .one("touchend.boxer", _touchEnd);
    }
  }
  
  // Handle touch move
  function _touchMove(e) {
    var touch = (typeof e.originalEvent.targetTouches !== "undefined") ? e.originalEvent.targetTouches[0] : null;
    
    data.delta = data.xStart - ((touch) ? touch.pageX : e.clientX);
    
    // Only prevent event if trying to swipe
    if (data.delta > 20) {
      _killEvent(e);
    }
    
    data.canSwipe = true;
    
    var newLeft = -data.delta;
    if (newLeft < data.touchMin) {
      newLeft = data.touchMin;
      data.canSwipe = false;
    }
    if (newLeft > data.touchMax) {
      newLeft = data.touchMax;
      data.canSwipe = false;
    }
    
    data.$image.css({ transform: "translate3D("+newLeft+"px,0,0)" });
    
    data.touchTimer = _startTimer(data.touchTimer, 300, function() { _touchEnd(e); });
  }
  
  // Handle touch end
  function _touchEnd(e) {
    _killEvent(e);
    
    _clearTimer(data.touchTimer);
      
    data.$boxer.off("touchmove.boxer touchend.boxer");
    
    if (data.delta) {
      data.$boxer.addClass("animated");
      data.swipe = false;
      
      if (data.canSwipe && (data.delta > data.edge || data.delta < -data.edge)) {
        data.swipe = true;
        if (data.delta <= data.leftPosition) {
          data.$image.css({ transform: "translate3D("+(data.contentWidth)+"px,0,0)" });
        } else {
          data.$image.css({ transform: "translate3D("+(-data.contentWidth)+"px,0,0)" });
        }
      } else {
        data.$image.css({ transform: "translate3D(0,0,0)" });
      }
      
      if (data.swipe) {
        data.$arrows.filter( (data.delta <= data.leftPosition) ? ".previous" : ".next" ).trigger("click");
      }
      _startTimer(data.resetTimer, data.options.duration, function() { 
        data.$boxer.removeClass("animated");
      });
    }
  }
  
  // Start Timer
  function _startTimer(timer, time, func) {
    _clearTimer(timer);
    return setTimeout(func, time);
  }
  
  // Clear timer
  function _clearTimer(timer) {
    if (timer) {
      clearTimeout(timer);
      timer = null;
    }
  }
  
  // Compute natural size
  function _naturalSize($img) {
    var node = $img[0],
      img = new Image();
    
    if (typeof node.naturalHeight !== "undefined") {
      return {
        naturalHeight: node.naturalHeight,
        naturalWidth:  node.naturalWidth
      };
    } else {
      if (node.tagName.toLowerCase() === 'img') {
        img.src = node.src;
        return {
          naturalHeight: img.height,
          naturalWidth:  img.width
        };
      }
    }
    return false;
  }
  
  // Kill event
  function _killEvent(e) {
    if (e.preventDefault) {
      e.stopPropagation();
      e.preventDefault();
    }
  }
  
  
  // Define Plugin
  $.fn.boxer = function(method) {
    if (pub[method]) {
      return pub[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method) {
      return _init.apply(this, arguments);
    }
    return this;  
  };
  
  $.boxer = function($target, opts) {
    if (pub[$target]) {
      return pub[$target].apply(window, Array.prototype.slice.call(arguments, 1));
    } else {
      return _build($.Event("click", { data: $.extend({
        $object: $target
      }, options, opts || {}) }));
    }
  };
})(jQuery, window);


/* ==========================================================
 * SOCIAL BUTTON AJAX
 * ==========================================================
*/

$('.share-this').click(function(){
    var sharePath = $( this ).data( "path")
    $('#share-container').load( sharePath );
  });

/* ==========================================================
 * RESPONSIVE TABLES
 * ==========================================================
*/
$(document).ready(function() {
  var switched = false;
  var updateTables = function() {
    if (($(window).width() < 767) && !switched ){
      switched = true;
      $("table.responsive").each(function(i, element) {
        splitTable($(element));
      });
      return true;
    }
    else if (switched && ($(window).width() > 767)) {
      switched = false;
      $("table.responsive").each(function(i, element) {
        unsplitTable($(element));
      });
    }
  };
   
  $(window).load(updateTables);
  $(window).on("redraw",function(){switched=false;updateTables();}); // An event to listen for
  $(window).on("resize", updateTables);
   
  
  function splitTable(original)
  {
    original.wrap("<div class='table-wrapper' />");
    
    var copy = original.clone();
    copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
    copy.removeClass("responsive");
    
    original.closest(".table-wrapper").append(copy);
    copy.wrap("<div class='pinned' />");
    original.wrap("<div class='scrollable' />");

    setCellHeights(original, copy);
  }
  
  function unsplitTable(original) {
    original.closest(".table-wrapper").find(".pinned").remove();
    original.unwrap();
    original.unwrap();
  }

  function setCellHeights(original, copy) {
    var tr = original.find('tr'),
        tr_copy = copy.find('tr'),
        heights = [];

    tr.each(function (index) {
      var self = $(this),
          tx = self.find('th, td');

      tx.each(function () {
        var height = $(this).outerHeight(true);
        heights[index] = heights[index] || 0;
        if (height > heights[index]) heights[index] = height;
      });

    });

    tr_copy.each(function (index) {
      $(this).height(heights[index]);
    });
  }

});

//Fix for video overlaping dropdowns and other z-indexed elements
$(document).ready(function() {
    $(".flex-video iframe").each(function(){
        var ifr_source = $(this).attr('src');
        var wmode = "wmode=transparent";
        if(ifr_source.indexOf('?') != -1) {
            var getQString = ifr_source.split('?');
            var oldString = getQString[1];
            var newString = getQString[0];
            $(this).attr('src',newString+'?'+wmode+'&'+oldString);
        }
        else $(this).attr('src',ifr_source+'?'+wmode);
    });
});
