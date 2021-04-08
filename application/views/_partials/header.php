<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: 'Roboto', sans-serif;
        }
        .container{
            max-width: 800px;
            margin:40px auto;
            padding:40px;
            box-shadow: 0px 2px 9px #0000003d;
        }
        form label{
            width: 15%;
            display: block;
            text-align: right;
            font-size: .87em;
        }
        form p{
            margin-left: 30px;
        }
        form input, form select{
            width: 50%;
            padding: 5px;
        }
        .btn{
            width: auto;
            display: inline-block;
            margin:20px;
        }
        .btn.btn-danger{
            background: #fba5a5;
        }
        .form-group{
            margin-top:10px;
        }
        .form-group > *{
            display: inline-block;
        }
        .btn{
            border: none;
            padding:5px 15px;
            background: #78dbf9;
            font-size: .9em;
            cursor: pointer;
        }

        .form-group > textarea{
            vertical-align: middle;
        }

        /* .error{
            background: #fd6666;
            width: 50%;
            color: #861717;
            font-size: .8em;
        } */

        .form-control.error{
            border: 1px solid red;
        }
        .form-control.error::placeholder{
            color: red;
        }
        .container h2{
            margin-bottom: 20px;
        }

        .success{
            background: #91e791;
            font-size: 1em;
            padding: 4px 12px;
        }
        .results > div{
            margin-top: 20px;
        }
        .results > div > *{
            display: inline-block;
        }

        .results > div > label{
            width: 20%;
            margin-left: 40px;
        }


        table{
            width: 100%;
        
        }
        table td{
       
            padding: 10px;
            border-right:1px solid #c8c8c8;
            border-top:1px solid #c8c8c8;
        }
        table tr td:first-child{
            border-left:1px solid #c8c8c8;
        }
        table tbody tr:last-child td{
            border-bottom:1px solid #c8c8c8;
        }
        thead td{
            font-weight:bold;
        }
        .light{
            font-weight:300;
        }
        .fifth{
            background: #303030;
        }
        .fifth td{
            color:white;
        }

        .mt-40{
            margin-top: 40px;
        }
        .delete_course a{
            text-decoration: none;
            color: black;
            display: inline-block;

        }
    </style>
</head>
<body>