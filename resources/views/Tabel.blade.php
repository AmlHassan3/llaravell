<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" style="width:; margin-top:">
    <thead>
        <tr>
            <th>Serial Number</th>
            <th>Acdimac Number </th>
            <th> Name</th>
            
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($stores as $store) --}}
            <tr>
                <td>1</td>
                <td>200138</td>
                <td>Asmaa Zaki</td>
            
            </tr>
            <tr>
                <td>2</td>
                <td>200139</td>
                <td>Amany mousa</td>
               
                
            </tr>
            <tr>
                <td>3</td>
                <td>200140</td>
                <td>Aml Hassan</td>
                
                
            </tr>
            <tr>
                <td>4</td>
                <td>200141</td>
                <td>Alaa Karem</td>
             
                
            </tr>
            <tr>
                <td>5</td>
                <td>200142</td>
                <td>Alaa Ahmed</td>
                
                
            </tr>
            <tr>
                <td>6</td>
                <td>200145</td>
                <td>Zyaid Abo Agiza</td>
                
                
            </tr>
            <td>7</td>
                <td>200146</td>
                <td>Ahmed Ali</td>
                
          </tr>
        </tr>
        <td>8</td>
            <td>200147</td>
            <td>Mohmed Ahmed</td>
            
      </tr>
    </tr>
    <td>9</td>
        <td>200148</td>
        <td>omnia Khaled</td>
      
  </tr>
</tr>
<td>10</td>
    <td>200149</td>
    <td>Aya Yasser</td>
    
</tr>
             {{-- @endforeach --}}
    </tbody>
   
</table>
<nav aria-label="Pagination">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <!-- Add more page numbers if needed -->
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</body>
</html>