/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  var $container = $('#container');
  var overflow = $('body').css ('overflow');
  var navTimer = null;
  
  $('nav .l').click (function () {
    if ($container.hasClass ('show')) {
      $container.removeClass ('show');
      $('body').css ('overflow', overflow);
    } else {
      $container.addClass ('show');
      $('body').css ('overflow', 'hidden');
    }
  });

  $('nav .r').click (function () {
    $(this).toggleClass ('show');

    clearTimeout (navTimer);
    
    navTimer = setTimeout (function () {
      $.ajax ({
          url: $('#ajax_navbar_url').val (),
          data: {
            type: $(this).data ('type')
          },
          async: true, cache: false, dataType: 'json', type: 'GET',
      })
      .done (function (result) {
        if (!result.status) $(this).remove ();
        $(this).parent ().empty ().html (result.content).find ('.r').addClass ('show').click (function () {
          $(this).toggleClass ('show');
        });
      }.bind ($(this)))
      .fail (function (result) {
        $(this).remove ();
      }.bind ($(this)));
    }.bind ($(this)), 300);
  }).find ('.admin, .login, .logout').click (function () {
    window.showLoading ();
  });

  $('nav>div>div:nth-child(3)').on ('click', '>a.share', function () {
    window.open ('https://www.facebook.com/sharer/sharer.php?u=' + window.location.href, '分享', 'scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,top=100,left=' + (window.screen ? Math.round(screen.width / 2 - 275) : 100));
    return false;
  });

  $container.find ('> div > div').last ().click (function () {
    $container.removeClass ('show');
    $('body').css ('overflow', overflow);
  });

  function setTabLayout ($tab, $tabDivDiv, sum) {
    $tabDivDiv.css ({'left': 0});

    if ((sum ? sum : $tabDivDiv.width ()) > $tab.width ()) $tab.addClass ('o');
    else $tab.removeClass ('o');
  }

  var arrowWidth = 30;
  var $tab = $('._t').each (function () {
    var $that = $(this);
    var $tabDivDiv = $(this).find ('> div > div');
    var units = $.makeArray ($tabDivDiv.find ('> a').map (function () {
          return $(this).width () + parseFloat ($(this).css ('padding-left')) + parseFloat ($(this).css ('padding-right'));
        }));

    var sum = units.reduce (function (a, b) { return a + b; }) + 2;
    $tabDivDiv.width (sum);

    $(window).resize (function () {
      if ($that.get (0).timer) clearTimeout ($that.get (0).timer);
      $that.get (0).timer = setTimeout (setTabLayout.bind ($that, $that, $tabDivDiv, sum), 300);
    });
    setTabLayout ($that, $tabDivDiv, sum);

    var $arrow = $(this).find ('> a');
    $that.get (0).clickCount = $tabDivDiv.find ('> a.a').index () + 1;

    var $firstArrow = $arrow.first ().click (function () {
      if (units[$that.get (0).clickCount - 1])
        $tabDivDiv.css ({'left': (--$that.get (0).clickCount < 1 ? 0 : (0 - units.slice (0, $that.get (0).clickCount).reduce (function (a, b) { return a + b; }))) + 'px'});
    });

    var $lastArrow = $arrow.last ().click (function () {
      if (units[$that.get (0).clickCount + 1])
        $tabDivDiv.css ({'left': 0 - units.slice (0, $that.get (0).clickCount+++1).reduce (function (a, b) { return a + b; }) + 'px'});
    });

    $arrow.click (function () {
      if (units[$that.get (0).clickCount - 1])
        $firstArrow.removeClass ('d');
      else
        $firstArrow.addClass ('d');

      if (units[$that.get (0).clickCount + 1])
        $lastArrow.removeClass ('d');
      else
        $lastArrow.addClass ('d');
    });
    if ($(this).hasClass ('o'))
      $arrow.first ().click ();
  });
  
  window.hideLoading ();
});