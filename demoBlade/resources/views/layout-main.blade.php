<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<style>
    #Wrapper{
        width: 700px;
        background-color: pink;
        margin: auto;
    }
    #Header{
        background-color: blue;
        margin: auto;
        height: 250px;
    }
    #left-Menu{
        background-color: red;
        margin: auto;
        float: left;
        width: 30%;
        
    }
    #Body{
        background-color: yellow;
        margin: auto;
        float: right;
        width: 70%;
        height: 250px;
    }
    #Footer{
        background-color: violet;
    }
</style>
<body>
    <div id="Wrapper">
        <div id="Header">
            Header
        </div>
        <div id="Content">
            <div id="left-Menu">
                left Menu
            </div>
            <div id="Body">
                @yield('main-content')
            </div>
            <div style="clear:both"></div>
        </div>
        <div id="Footer">
            Footer
        </div>
    </div>
</body>
</html>