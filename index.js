function OnFormSubmit(data) {
    // console.log("data:" + data.elements);
    var formData = data.elements;
    console.log(formData);
    for (var ele in formData) {
        console.log(ele);
    }
    var result = document.getElementById("result");
    // result.innerText = data.values;
    // console.log(data["name"]);
    var name = document.getElementById("fname");
    result.innerHTML = name.value;
    console.log(name);
    if (name.value != null)
        window.alert("Hello " + name.value);
    else
        window.alert("enter name");
}
