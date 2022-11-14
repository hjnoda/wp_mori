<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css">
<div class="wrap">
  <h2><i class="fas fa-check-circle"></i> 基本設定</h2>


  <div class="wrap">
    <?php if ($val->mess) { ?>
      <div class="mb-3 alert alert-primary" role="alert">
        <i class="fas fa-registered"></i> <?php echo $val->mess; ?>
      </div>
    <?php } ?>
    <form action="admin.php?page=base_admin" method='post' id="tag_admin">
      <div class="mt-3 mb-5">
        サイトで利用する基本項目を設定します。
      </div>
      <table class="table bd mt-3">
        <tr>
          <th width="20%">サイト名</th>
          <td><input type="text" name="sitename" value="<?= $val->sitename ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">社名／ブランド名</th>
          <td><input type="text" name="name" value="<?= $val->name ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">郵便番号</th>
          <td><input type="text" name="pref" value="<?= $val->pref ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">所在地</th>
          <td><input type="text" name="addr" value="<?= $val->addr ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">所在地(その他)</th>
          <td><input type="text" name="addr2" value="<?= $val->addr2 ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">Tel</th>
          <td><input type="text" name="tel" value="<?= $val->tel ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">Fax</th>
          <td><input type="text" name="fax" value="<?= $val->fax ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">Mail</th>
          <td><input type="text" name="mail" value="<?= $val->mail ?>" size="100" /></td>
        </tr>
      </table>


      <input type="hidden" name="mode" value="conf" />
      <p style="text-align:center;"><input type='submit' value='設定を保存' class='button button-primary button-large'></p>
    </form>
    <div class="mt-5 bd p-3">
      <h6>テンプレートタグ</h6>
      <code>
        &#x30b5;&#x30a4;&#x30c8;&#x540d;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x73;&#x69;&#x74;&#x65;&#x6e;&#x61;&#x6d;&#x65;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x793e;&#x540d;&#xff0f;&#x30d6;&#x30e9;&#x30f3;&#x30c9;&#x540d;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x6e;&#x61;&#x6d;&#x65;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x90f5;&#x4fbf;&#x756a;&#x53f7;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x70;&#x72;&#x65;&#x66;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x6240;&#x5728;&#x5730;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x61;&#x64;&#x64;&#x72;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x54;&#x65;&#x6c;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x74;&#x65;&#x6c;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x46;&#x61;&#x78;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x66;&#x61;&#x78;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x4d;&#x61;&#x69;&#x6c;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x6d;&#x61;&#x69;&#x6c;&#x27;&#x29;&#x20;&#x3f;&#x3e;
      </code>
      <h6 class="mt-3">ショートコード</h6>
      <code>
        サイト名：[conf sitename]
        社名／ブランド名：[conf name]
        郵便番号：[conf pref]
        所在地：[conf addr]
        Tel：[conf tel]
        Fax：[conf fax]
        Mail：[conf mail]
      </code>
    </div>
  </div>

</div>