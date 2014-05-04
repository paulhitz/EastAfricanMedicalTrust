<?php include("../header.html"); ?>

  <h1>Comments</h1>

  <p>Comments from supporters of the charity are listed below. Feel free to add your own comments.</p>

  <div id="comments">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p>Enter your message details here...</p>
      <h2 class="warning">Messages disabled due to abuse</h2>
    </form>
  </div>
  <div style="padding-left: 10px; padding-right: 10px;">
  <h2>Previous comments... </h2>
<?php
//Include the contents of the comments file and suppress any errors.
if (!(@ include("comments.txt")))
{
    echo "<p style=\"text-align: center;\" class=\"warning\"><strong>*** There was an error displaying the comments ***</strong></p>";
}
?>
  </div>

<?php include("../footer.html"); ?>
