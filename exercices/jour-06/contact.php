  <form method="post">
      <label for="name">Name* </label><br />
      <input name="name" required="true" /><br />

      <label for="email">Email* </label><br />
      <input name="email" required="true" /><br />

      <label for="message">Your message*</label><br />
      <textarea cols="100" rows="10" name="message" required="true" minlength=10></textarea><br />

      <p><small>* Required fields</small></p>

      <input type="submit" value="Send" />
  </form>

  <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide";
    }

    echo htmlspecialchars($_POST["name"]) . htmlspecialchars($_POST["email"]) . htmlspecialchars($_POST["message"]);
