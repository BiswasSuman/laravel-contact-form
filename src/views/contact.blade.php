<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Package</title>
</head>
<body>

<h1>Contact Us </h1>
<form method="post" action="{{route('submit_contact')}}">
  @csrf
  
  <table>
    <tbody>
      <tr>
        <td> <input type="text" name="name" placeholder="Your name"> </td>
      </tr>
      <tr>
        <td> <input type="email" name="email" placeholder="Your email"> </td>
      </tr>
      <tr>
        <td> <textarea name="message" rows="10" ></textarea> </td>
      </tr>
      <tr>
        <td> <input type="submit" value="Send"> </td>
      </tr>
    </tbody>
  </table>

</form>
  
</body>
</html>