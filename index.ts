function OnFormSubmit(data:HTMLFormElement) {
            // console.log("data:" + data.elements);
            const formData=data.elements ;
            console.log(formData);
            
            for (const ele in formData) {
                console.log(ele);
            }
            var result = document .getElementById("result");
            // result.innerText = data.values;
            // console.log(data["name"]);
            const name = document.getElementById("fname") as HTMLInputElement;
            result.innerHTML = name.value;
            console.log(name)
            if (name.value != null)
                window.alert("Hello " + name.value)
            else
                window.alert("enter name")
        }