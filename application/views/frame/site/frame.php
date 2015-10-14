<!DOCTYPE html>
<html lang="zh">
  <head>
    <?php echo isset ($meta_list) ? $meta_list : ''; ?>

    <title><?php echo isset ($title) ? $title : ''; ?></title>

<?php echo isset ($css_list) ? $css_list : ''; ?>

<?php echo isset ($js_list) ? $js_list : ''; ?>

  </head>
  <body lang="zh-tw">
    <?php echo isset ($hidden_list) ? $hidden_list : ''; ?>
    
    <nav>
      <div>
        <a href='<?php echo base_url ();?>' class='o'><div>電話</div><div><div>聯絡簿</div><div>phones book</div></div></a>
        <div>
    <?php if (isset ($back_link) && $back_link) { ?>
            <a class='icon-arrow-left' href='<?php echo $back_link;?>'></a>
    <?php } else { ?>
            <div class='l icon-menu'></div>
    <?php }
          if (isset ($subtitle) && $subtitle) {?>
            <h1><?php echo $subtitle;?></h1>
    <?php }?>
        </div>

        <div>
          <div class='r icon-more' data-type='site'>
            <div class='c'></div>
            <div class='l'><img src='data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==' /></div>
          </div>
        </div>
      </div>
    </nav>

    <div id='container'>
      <div>
        <div>
          <div>
            <div><div>電話</div><div>Book</div></div>
            <div><div>Phones</div><div>記錄簿</div></div>
          </div>
          <h4>qweqwe</h4>
          <div>
            <a href='qwe' target="_blank" class='icon-more a'>qwe</a>
            <a href='qwe' target="_blank" class='icon-more'>qwe</a>
            <a href='qwe' target="_blank" class='icon-more'>qwe</a>
            <a href='qwe' target="_blank" class='icon-more'>qwe</a>
          </div>
        </div>

        <div>

          <div class='_t'>
            <a class='icon-chevron-left'></a>
            <div>
              <div>
                <a href='' class='a'>wqe</a>
                <a href='' class=''>wqe</a>
                <a href='' class=''>wqe</a>
                <a href='' class=''>wqe</a>
              </div>
            </div>
            <a class='icon-chevron-right'></a>
          </div>

          <div class='_c'>
            <?php echo isset ($content) ? $content : ''; ?>
          </div>

    <?php if ($_flash_message = Session::getData ('_flash_message', true)) { ?>
            <div class='_m'><?php echo $_flash_message;?></div>
    <?php }?>
        </div>
        <div></div>
      </div>
    </div>

    <div id='footer'><div></div><div><div>OA's Phones Books © 2015</div><div>如有相關問題歡迎與<a href="https://www.facebook.com/comdan66" target="_blank">作者</a>討論。</div></div><div></div></div>

    <div id='action' class='icon-plus'></div>
    <div id='loading'><svg class="svg" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div>

  </body>
</html>