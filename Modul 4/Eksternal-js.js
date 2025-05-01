document.getElementById("notifyButton").addEventListener("click", function() {
    alert("Thankyou!");
});

document.getElementById("changeTextButton").addEventListener("click", function() {
    const textElement = document.getElementById("text2");

    if (textElement.textContent === "Willy Rafael F. Silalahi") {
        textElement.textContent = "FTI Unmer Malang!";
    } else {
        textElement.textContent = "Willy Rafael F. Silalahi";
    }
});