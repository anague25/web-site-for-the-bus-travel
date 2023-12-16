<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<style>
  
    table{
       border-collapse: collapse;
       border: 2px solid #000000;
       border-radius: 5px;

    }
    .title{
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
        color:#010004;
        text-align: center;
        text-transform: uppercase;

    }
   .tete{
   
    font-family: 'Times New Roman', Times, serif;
    background-color:#ffffff;
        text-align: center;
        color: #070707;
        font-weight:bold;
       
    }

    td{
        padding: 3px;
        border-right: 1px solid  #000000;
    }

    

    th{
    padding: 2px;  
    border :1px solid black; 
    }
    tr{
    
    border :1px solid black; 
    }

    .corps{
       
       font-family: 'Times New Roman', Times, serif;
        text-align:center;
        color:#000000;
    }



</style>
<div>
    <h2 class="title">Voyage avec {{$data->nomdelagence}}</h2>
</div>

    <div class="tab">
        <table >
            <thead>
            <tr class="tete">
              <th scope="col">ID du ticket</th>
              <th scope="col">date de voyage</th>
              <th scope="col">nom de l'agence</th>
              <th scope="col">nom du passage</th>
              <th scope="col">Depart</th>
              <th scope="col" >Destination</th>
              <th scope="col">prix du ticket</th>
              <th scope="col">matricule du bus</th>
              <th scope="col">nombre de siege</th>
              <th scope="col">numero du siege</th>
             
            </tr>
          </thead>

          <tbody>
                <tr class="corps">
                    <th style="border-right:1px solid rgb(255, 255, 255)" scope="row">{{$data->id}}</th>
                    <td >{{$data->date}}</td>
                    <td >{{$data->nomdelagence}}</td>
                    <td >{{$data->nometprenom}}</td>
                    <td >{{$data->depart}}</td>
                    <td >{{$data->destination}}</td>
                    <td >{{$data->prix}}</td>
                    <td >{{$data->matricule}}</td>
                    <td >{{$data->nombredesiege}}</td>
                    <td >{{$data->numerodusiege}}</td>
                  </tr>
                
                
            </tbody>
        </table>
        
      </div>

</body>
</html>