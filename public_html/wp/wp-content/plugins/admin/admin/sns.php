<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css">
<div class="wrap">
  <h2><i class="fas fa-check-circle"></i> SNS設定</h2>

  <div class="wrap">

    <?php if ($mess) { ?>
      <div class="mb-3 alert alert-primary" role="alert">
        <i class="fas fa-registered"></i> <?php echo $mess; ?>
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
          <td><input type="text" name="tw" value="<?= $tw ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">facebook</th>
          <td><input type="text" name="fb" value="<?= $fb ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">facebook（個人）</th>
          <td><input type="text" name="fb_personal" value="<?= $fb_personal ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">instagram(personal)</th>
          <td><input type="text" name="in" value="<?= $in ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">instagram(office)</th>
          <td><input type="text" name="in_office" value="<?= $in_office ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">youtube(policy)</th>
          <td><input type="text" name="yt" value="<?= $yt ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">youtube(activity)</th>
          <td><input type="text" name="yt_sub" value="<?= $yt_sub ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">line</th>
          <td><input type="text" name="line" value="<?= $line ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">line(pesonal)</th>
          <td><input type="text" name="line_personal" value="<?= $line_personal ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">note</th>
          <td><input type="text" name="note" value="<?= $note ?>" size="100" /></td>
        </tr>
      </table>
      <h5 class="mt-4">CHANNEL設定</h5>
      <table class="table bd mt-3">
        <tr>
          <th width="20%">MASTER</th>
          <td><input type="text" name="channel_id" value="<?= $channel_id ?>" size="100" /></td>
        </tr>
        <tr>
          <th width="20%">SUB</th>
          <td><input type="text" name="sub_channel_id" value="<?= $sub_channel_id ?>" size="100" /></td>
        </tr>
      </table>
      <input type="hidden" name="mode" value="conf" />
      <p style="text-align:center;"><input type='submit' value='設定を保存' class='button button-primary button-large'></p>
    </form>
  </div>

</div>