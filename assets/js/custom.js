$(document).ready(function() {
    'use strict';
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('nav.transparent').addClass("sticky");
            $('nav.transparent').removeClass("normal")
        } else {
            $('nav.transparent').removeClass("sticky");
            $('nav.transparent').addClass("normal")
        }
    });

    function toggleChevron(e) {
        $(e.target).prev('.panel-heading').find("i.indicator2").toggleClass('fa-plus fa-minus')
    }

    function toggleChevron1(e) {
        $(e.target).prev('.panel-heading').find("i.indicator").toggleClass('fa-angle-down fa-angle-right')
    }
    
    
    //Toggle tabs on hover
    //Needs improvement, but I can't get it to work in jquery
    /*
    window.onmouseover=function(e) {
        if (e.target.className == "collapsed") {
            e.target.click()
        }
    };
    */
    
    
    

    $('.accordion_arrow').on('hidden.bs.collapse', toggleChevron1);
    $('.accordion_arrow').on('shown.bs.collapse', toggleChevron1);
    $('.accordion_plusminus').on('hidden.bs.collapse', toggleChevron);
    $('.accordion_plusminus').on('shown.bs.collapse', toggleChevron)
});

var status = 0;

function openNav(e) {
    status = 1;
    $('.side-tabs').css({
        'right': '0'
    });
    document.getElementById("mySidenav").style.right = "0px";
    document.getElementById("menu").classList.add("open");
    document.getElementById("cover").classList.add("overlay");
    partial = '<a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a>'
    partial += document.getElementById(e).innerHTML;
    document.getElementById("mySidenav").innerHTML = partial
    //w3IncludeHTML()
}

function closeNav() {
    status = 0;
    document.getElementById("mySidenav").style.right = "-400px";
    document.getElementById("menu").classList.remove("open");
    document.getElementById("cover").classList.remove("overlay");
    if ($(this).scrollTop() > 300) {
        $('.side-tabs').css({
            'right': '-400px'
        });
        $('.little-tab').css({
            'right': '0'
        })
    }
}
$(window).scroll(function() {
    if (($(this).scrollTop() > 300) && (status == 0)) {
        $('.side-tabs').css({
            'right': '-400px'
        });
        $('.little-tab').css({
            'right': '0'
        })
    } else {
        $('.side-tabs').css({
            'right': '0'
        });
        $('.little-tab').css({
            'right': '-200px'
        })
    }
});




(function(factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory)
    } else if (typeof module === 'object' && module.exports) {
        factory(require('jquery'))
    } else {
        factory(jQuery)
    }
}(function($) {
    var version = '2.1.1';
    var optionOverrides = {};
    var defaults = {
        exclude: [],
        excludeWithin: [],
        offset: 0,
        direction: 'top',
        delegateSelector: null,
        scrollElement: null,
        scrollTarget: null,
        beforeScroll: function() {},
        afterScroll: function() {},
        easing: 'swing',
        speed: 400,
        autoCoefficient: 2,
        preventDefault: !0
    };
    var getScrollable = function(opts) {
        var scrollable = [];
        var scrolled = !1;
        var dir = opts.dir && opts.dir === 'left' ? 'scrollLeft' : 'scrollTop';
        this.each(function() {
            var el = $(this);
            if (this === document || this === window) {
                return
            }
            if (document.scrollingElement && (this === document.documentElement || this === document.body)) {
                scrollable.push(document.scrollingElement);
                return !1
            }
            if (el[dir]() > 0) {
                scrollable.push(this)
            } else {
                el[dir](1);
                scrolled = el[dir]() > 0;
                if (scrolled) {
                    scrollable.push(this)
                }
                el[dir](0)
            }
        });
        if (!scrollable.length) {
            this.each(function() {
                if (this === document.documentElement && $(this).css('scrollBehavior') === 'smooth') {
                    scrollable = [this]
                }
                if (!scrollable.length && this.nodeName === 'BODY') {
                    scrollable = [this]
                }
            })
        }
        if (opts.el === 'first' && scrollable.length > 1) {
            scrollable = [scrollable[0]]
        }
        return scrollable
    };
    var rRelative = /^([\-\+]=)(\d+)/;
    $.fn.extend({
        scrollable: function(dir) {
            var scrl = getScrollable.call(this, {
                dir: dir
            });
            return this.pushStack(scrl)
        },
        firstScrollable: function(dir) {
            var scrl = getScrollable.call(this, {
                el: 'first',
                dir: dir
            });
            return this.pushStack(scrl)
        },
        smoothScroll: function(options, extra) {
            options = options || {};
            if (options === 'options') {
                if (!extra) {
                    return this.first().data('ssOpts')
                }
                return this.each(function() {
                    var $this = $(this);
                    var opts = $.extend($this.data('ssOpts') || {}, extra);
                    $(this).data('ssOpts', opts)
                })
            }
            var opts = $.extend({}, $.fn.smoothScroll.defaults, options);
            var clickHandler = function(event) {
                var escapeSelector = function(str) {
                    return str.replace(/(:|\.|\/)/g, '\\$1')
                };
                var link = this;
                var $link = $(this);
                var thisOpts = $.extend({}, opts, $link.data('ssOpts') || {});
                var exclude = opts.exclude;
                var excludeWithin = thisOpts.excludeWithin;
                var elCounter = 0;
                var ewlCounter = 0;
                var include = !0;
                var clickOpts = {};
                var locationPath = $.smoothScroll.filterPath(location.pathname);
                var linkPath = $.smoothScroll.filterPath(link.pathname);
                var hostMatch = location.hostname === link.hostname || !link.hostname;
                var pathMatch = thisOpts.scrollTarget || (linkPath === locationPath);
                var thisHash = escapeSelector(link.hash);
                if (thisHash && !$(thisHash).length) {
                    include = !1
                }
                if (!thisOpts.scrollTarget && (!hostMatch || !pathMatch || !thisHash)) {
                    include = !1
                } else {
                    while (include && elCounter < exclude.length) {
                        if ($link.is(escapeSelector(exclude[elCounter++]))) {
                            include = !1
                        }
                    }
                    while (include && ewlCounter < excludeWithin.length) {
                        if ($link.closest(excludeWithin[ewlCounter++]).length) {
                            include = !1
                        }
                    }
                }
                if (include) {
                    if (thisOpts.preventDefault) {
                        event.preventDefault()
                    }
                    $.extend(clickOpts, thisOpts, {
                        scrollTarget: thisOpts.scrollTarget || thisHash,
                        link: link
                    });
                    $.smoothScroll(clickOpts)
                }
            };
            if (options.delegateSelector !== null) {
                this.off('click.smoothscroll', options.delegateSelector).on('click.smoothscroll', options.delegateSelector, clickHandler)
            } else {
                this.off('click.smoothscroll').on('click.smoothscroll', clickHandler)
            }
            return this
        }
    });
    var getExplicitOffset = function(val) {
        var explicit = {
            relative: ''
        };
        var parts = typeof val === 'string' && rRelative.exec(val);
        if (typeof val === 'number') {
            explicit.px = val
        } else if (parts) {
            explicit.relative = parts[1];
            explicit.px = parseFloat(parts[2]) || 0
        }
        return explicit
    };
    $.smoothScroll = function(options, px) {
        if (options === 'options' && typeof px === 'object') {
            return $.extend(optionOverrides, px)
        }
        var opts, $scroller, speed, delta;
        var explicitOffset = getExplicitOffset(options);
        var scrollTargetOffset = {};
        var scrollerOffset = 0;
        var offPos = 'offset';
        var scrollDir = 'scrollTop';
        var aniProps = {};
        var aniOpts = {};
        console.log(explicitOffset);
        if (explicitOffset.px) {
            opts = $.extend({
                link: null
            }, $.fn.smoothScroll.defaults, optionOverrides)
        } else {
            opts = $.extend({
                link: null
            }, $.fn.smoothScroll.defaults, options || {}, optionOverrides);
            if (opts.scrollElement) {
                offPos = 'position';
                if (opts.scrollElement.css('position') === 'static') {
                    opts.scrollElement.css('position', 'relative')
                }
            }
            if (px) {
                explicitOffset = getExplicitOffset(px)
            }
        }
        scrollDir = opts.direction === 'left' ? 'scrollLeft' : scrollDir;
        if (opts.scrollElement) {
            $scroller = opts.scrollElement;
            if (!explicitOffset.px && !(/^(?:HTML|BODY)$/).test($scroller[0].nodeName)) {
                scrollerOffset = $scroller[scrollDir]()
            }
        } else {
            $scroller = $('html, body').firstScrollable(opts.direction)
        }
        opts.beforeScroll.call($scroller, opts);
        scrollTargetOffset = explicitOffset.px ? explicitOffset : {
            relative: '',
            px: ($(opts.scrollTarget)[offPos]() && $(opts.scrollTarget)[offPos]()[opts.direction]) || 0
        };
        aniProps[scrollDir] = scrollTargetOffset.relative + (scrollTargetOffset.px + scrollerOffset + opts.offset);
        speed = opts.speed;
        if (speed === 'auto') {
            delta = Math.abs(aniProps[scrollDir] - $scroller[scrollDir]());
            speed = delta / opts.autoCoefficient
        }
        aniOpts = {
            duration: speed,
            easing: opts.easing,
            complete: function() {
                opts.afterScroll.call(opts.link, opts)
            }
        };
        if (opts.step) {
            aniOpts.step = opts.step
        }
        if ($scroller.length) {
            $scroller.stop().animate(aniProps, aniOpts)
        } else {
            opts.afterScroll.call(opts.link, opts)
        }
    };
    $.smoothScroll.version = version;
    $.smoothScroll.filterPath = function(string) {
        string = string || '';
        return string.replace(/^\//, '').replace(/(?:index|default).[a-zA-Z]{3,4}$/, '').replace(/\/$/, '')
    };
    $.fn.smoothScroll.defaults = defaults
}))