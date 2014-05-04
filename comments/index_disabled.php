<?php 

$title = "Comments";
include("../header.html"); 

/**
 * Prepends the specified message to a text file. The entire file is read into 
 * memory and the latest comment prepended to it. Then it is written back to the file.
 * HTML tags are first stripped from the supplied text and HTML line breaks are added.
 *
 * NOTE: Because of the way we are doing this, it will be tough to delete a specific message.
 * 
 * @param $name The name of the person who filled in the form.
 * @param $country 
 * @param $message The message body.
 * @return true if executed successfully; false otherwise.
 */
function add_message($name, $country, $message)
{
    $comments_file = "comments.txt";
    @ $fout = (fopen($comments_file, "r+", TRUE));
    if (!$fout)
    {
        return false;
    }
    else
    {
        //Format the current message.
        $message_to_write = "<div class=\"comment\"><p>Name: " . $name . "<br/>";
        if (!empty($country))
        {
            $message_to_write .= "Country: " . $country . "<br/>";
        }
        $message_to_write .= "Date: " . gmdate("F j, Y") . "<br/>";
        $message_to_write .= "Message: " . $message . "</p>";
        $message_to_write .= "<hr/></div>";

        /*
         * Get ALL of the previous messages. We have to do this since we 
         * want to PREPEND the current message.
         *
         * NOTE: Could there be a possible race-condition here?
         */
        $previous_messages = file_get_contents($comments_file, TRUE);
        //echo "prev = " . $previous_messages . "end";
        $message_to_write = nl2br($message_to_write) . $previous_messages;
        fseek($fout, 0); //We are going to overwrite it all so set file pointer to the start of the file.
        fwrite($fout, $message_to_write);
        fclose($fout);
    }
    return true;
}

?>

  <h1>Comments</h1>

  <p>Comments from supporters of the charity are listed below. Feel free to add your own comments.</p>

  <div id="comments">

<?php
$submit = $_POST["submit"];
$submit_success = false;
if (isset($submit))
{
    //Check required fields have been filled in.
    $name = strip_tags($_POST["name"]);
    $country = strip_tags($_POST["country"]);
    $message = strip_tags($_POST["message"]);
    if (!empty($name) && !empty($message))
    {
        if (add_message($name, $country, $message))
        {
            $submit_success = true;
            //TODO send email
            echo("<p style=\"text-align: center;\" class=\"ok\">*** Thank you, " . $name . " *** <br/>*** Your Message has been added! ***</p>");
        }
        else
        {
            echo("<p style=\"text-align: center;\" class=\"warning\">*** Error! An error occurred. *** <br/>*** Your message was NOT added! ***</p>");
        }
    }
    else
    {
        echo("<p style=\"text-align: center;\" class=\"warning\">*** Not all the required information was filled in! ***</p>");
    }
}

if (!$submit_success)
{
?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p>Enter your message details here...</p>
      <ul>
        <li>
          <label for="name"><strong><em>N</em>ame:</strong></label> <input type="text" size="20" maxlength="50" name="name" id="name" accesskey="n" />
        </li>
        <li>
          <label for="country"><strong><em>C</em>ountry:</strong></label> <input type="text" size="20" maxlength="50" name="country" id="country" accesskey="c" />
        </li>
        <li>
          <label for="message" style="vertical-align: top;"><strong><em>M</em>essage:</strong></label> <textarea name="message" id="message" cols="30" rows="6" accesskey="m"></textarea>
        </li>
        <li style="width: 55%; margin-left: auto; margin-right: auto;">
          <button type="submit" name="submit">Send Message</button>&nbsp; &nbsp; &nbsp;
          <button type="reset">Reset</button>
        </li>
      </ul>
    </form>

<?php } ?>

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
