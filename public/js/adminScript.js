const fileInput = document.getElementById("file-input");
const previewImage = document.getElementById("preview-image");

fileInput.addEventListener("change", (event) => {
    const selectedFile = event.target.files[0];
    const selectedFileUrl = URL.createObjectURL(selectedFile);
    previewImage.src = selectedFileUrl;
});
