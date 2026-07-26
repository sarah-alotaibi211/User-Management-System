function toggleStatus(id)
{
    alert("وصلت للدالة");

    let xhr = new XMLHttpRequest();

    xhr.open("POST","toggle.php",true);

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhr.onload = function(){
        alert(this.responseText);
        document.getElementById("status"+id).innerHTML = this.responseText;
    }

    xhr.send("id="+id);
}