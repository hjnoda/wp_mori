<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css">
<div class="wrap">
  <h2><i class="fas fa-check-circle"></i> SNS設定</h2>

  <div class="wrap">
    <?php if ($val->mess) { ?>
      <div class="mb-3 alert alert-primary" role="alert">
        <i class="fas fa-registered"></i> <?php echo $val->mess; ?>
      </div>
    <?php } ?>
    <form action="admin.php?page=sns_admin" method='post' id="sns_admin">
      <div class="mt-3 mb-5">
        SNSアカウントの設定を行います。
      </div>
      <h5>URL設定</h5>
      <table class="table bd mt-3">
        <tr>
          <th width="20%">twitter</th>
          <td><input type="text" name="twitter" value="<?= $val->twitter ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">facebook</th>
          <td><input type="text" name="facebook" value="<?= $val->facebook ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">instagram</th>
          <td><input type="text" name="instagram" value="<?= $val->instagram ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">line</th>
          <td><input type="text" name="line" value="<?= $val->line ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">youtube</th>
          <td><input type="text" name="youtube" value="<?= $val->youtube ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">note</th>
          <td><input type="text" name="note" value="<?= $val->note ?>" size="100" /></td>
        </tr>
      </table>
      <input type="hidden" name="mode" value="conf" />
      <p style="text-align:center;"><input type='submit' value='設定を保存' class='button button-primary button-large'></p>
    </form>

    <div class="mt-5 bd p-3">
        <h6>テンプレートタグ</h6>
        <code>
        &#x74;&#x77;&#x69;&#x74;&#x74;&#x65;&#x72;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x74;&#x77;&#x69;&#x74;&#x74;&#x65;&#x72;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x66;&#x61;&#x63;&#x65;&#x62;&#x6f;&#x6f;&#x6b;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x66;&#x61;&#x63;&#x65;&#x62;&#x6f;&#x6f;&#x6b;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x69;&#x6e;&#x73;&#x74;&#x61;&#x67;&#x72;&#x61;&#x6d;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x69;&#x6e;&#x73;&#x74;&#x61;&#x67;&#x72;&#x61;&#x6d;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x6c;&#x69;&#x6e;&#x65;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x6c;&#x69;&#x6e;&#x65;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x79;&#x6f;&#x75;&#x74;&#x75;&#x62;&#x65;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x79;&#x6f;&#x75;&#x74;&#x75;&#x62;&#x65;&#x27;&#x29;&#x20;&#x3f;&#x3e;&#xa;&#x6e;&#x6f;&#x74;&#x65;&#xff1a;&#x3c;&#x3f;&#x3d;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x28;&#x27;&#x6e;&#x6f;&#x74;&#x65;&#x27;&#x29;&#x20;&#x3f;&#x3e;
        </code>
        <h6 class="mt-3">ショートコード</h6>
        <code>
          twitter：[conf twitter]
          facebook：[conf facebook]
          instagram：[conf instagram]
          line：[conf line]
          youtube：[conf youtube]
          note：[conf note]
        </code>
      </div>
  </div>
</div>