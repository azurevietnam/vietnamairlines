function HeaderController($scope, $location)
{
    $scope.isActive = function(viewLocation) {
        return viewLocation === $location.path();
    };
}

function goiajax($DivName, $AjaxInfoPage)
{
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById($DivName).innerHTML = xmlhttp.responseText;

        }
    }

    xmlhttp.open("GET", $AjaxInfoPage, false);
    xmlhttp.send();
}
