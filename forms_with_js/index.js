function OnFormSubmit(data) {
    try {
        var formData = data.elements;
        // console.log(formData);
        var fname = formData.namedItem("fname");
        if (fname.value != null && fname.value != "") {
            console.log(fname.value);
            var result = document.getElementById("result");
            result.innerHTML = fname.value;
            window.alert("Hello " + fname.value);
        }
        else {
            window.alert("enter name");
            fname.focus();
        }
    }
    catch (err) {
        document.getElementById("result").innerHTML = err.message;
    }
}
