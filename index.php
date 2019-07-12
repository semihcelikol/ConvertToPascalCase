<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Convert Class and Property</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://converter.semihcelikol.com/">Converter tool || CamelCaseToPascalCase or PascalCaseToCamelCase</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://semihcelikol.com/camel-case-to-pascal-case/" target="_blank">About <span class="sr-only">(current)</span></a>
      </li>
    </ul>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-9">
        <b>Your Code</b>
        <textarea class="form-control" id="data" name="data" rows="10" cols="50">
public class testData
{
   public string name { get; set; }
   public string surName { get; set; }
}

public class testData2
{
   public string name2 { get; set; }
   public string surName2 { get; set; }
}</textarea>
        <p></p>
        <input type="button" value="Convert Pascal Case" class="btn btn-primary" name="convertPascalCase" />
        <input type="button" value="Convert Camel Case" class="btn btn-primary" name="convertCamelCase" />
    </div>
    <p></p>
    <div class="col-md-9">
    <br>
        <b>Output</b>
        <textarea class="form-control" id="output" name="output" rows="10" cols="50"></textarea>
    </div>
  </div>
</div>
<br>
<div class="container">
<div class="row">
      <div class="col-md-5">
        <h2> Github</h2>
        <p> Github Repositories</p>
        <p><a class="btn btn-secondary" href="https://github.com/semihcelikol/ConvertToPascalCase" role="button">View details »</a></p>
      </div>
      <div class="col-md-5">
        <h2> Blog</h2>
        <p> Blog Post</p>
        <p><a class="btn btn-secondary" href="http://semihcelikol.com/camel-case-to-pascal-case/" role="button">View details »</a></p>
      </div>
    </div>
</div>
<!-- Scripts -->
<script src="scripts/main.js"></script>
<br>
<footer class="container">
  <p>© semihcelikol.com</p>
</footer>
</body>
</html>