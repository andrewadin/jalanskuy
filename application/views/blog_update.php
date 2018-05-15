<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Saya</title>
  </head>
  <body>
    <h1>Tulis Artikel Baru</h1>
    <form action="<?php echo base_url('blog/update_proses'); ?>" method="post">
      <label>
        Judul: <input type="text" name="judul" autofocus value="<?php echo $posts[0]->judul; ?>">
      </label>
      <br>
      <label>
        Konten:<br>
        <textarea name="konten" ><?php echo $posts[0]->konten; ?></textarea>
      </label>
      <br>
      <input type="hidden" name="id" value="<?php echo $posts[0]->id; ?>">
      <input type="submit" value="Simpan">
    </form>
  </body>
</html>