<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css">
<div class="wrap">
  <h2><i class="fas fa-check-circle"></i> タグ設定</h2>


  <div class="wrap">
    <?php if ($mess) { ?>
      <div class="mb-3 alert alert-primary" role="alert">
        <i class="fas fa-registered"></i> <?php echo $mess; ?>
      </div>
    <?php } ?>
    <form action="admin.php?page=tag_admin" method='post' id="tag_admin">

    <div class="mt-3 mb-5">
    Google Analytics等のJSコードを埋め込みます。
    </div>

      <table class="table bd">
        <tr>
          <th>ヘッダー</th>
          <td><textarea name="header" rows="8" cols="100"><?= $val->header ?></textarea></td>
        </tr>
        <tr>
          <th>body内</th>
          <td><textarea name="body" rows="8" cols="100"><?= $val->body ?></textarea></td>
        </tr>
        <tr>
          <th>フッター</th>
          <td><textarea name="footer" rows="8" cols="100"><?= $val->footer ?></textarea></td>
        </tr>
      </table>

      <input type="hidden" name="mode" value="conf" />
      <p style="text-align:center;"><input type='submit' value='設定を保存' class='button button-primary button-large'></p>
    </form>
    <div class="mt-5 bd p-3">
      <h6>テンプレートタグ</h6>
      <code>
      &#x68;&#x65;&#x61;&#x64;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x68;&#x65;&#x61;&#x64;&#x65;&#x72;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x62;&#x6f;&#x64;&#x79;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x62;&#x6f;&#x64;&#x79;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x66;&#x6f;&#x6f;&#x74;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x66;&#x6f;&#x6f;&#x74;&#x65;&#x72;&#x27;&#x29;&#x20;&#x3f;&#x3e;
      </code>
      <h6 class="mt-3">ショートコード</h6>
      <code>
        head：[conf header]
        body：[conf body]
        foot：[conf footer]
      </code>
    </div>
  </div>

</div>