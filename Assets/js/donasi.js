const nomorTel = document.querySelector('#nomor');

const uploadImg = document.querySelector('#image');

nomorTel.addEventListener('input', () => {
  const nomorValue = nomorTel.value;

  if (!/^(62)\d*$/.test(nomorValue)) {
    nomorTel.setCustomValidity('Nomor telepon harus diawali dengan "62"');
    return nomorTel.autofocus;
  } else {
    nomorTel.setCustomValidity('');
  }

});

uploadImg.onchange = () => {
  let file = uploadImg.value;
  const fileExt = file.substring(file.lastIndexOf('.') + 1).toLowerCase();

  if (!(fileExt == "png" || fileExt == "jpeg" || fileExt == "jpg")) {
    alert('Hanya menerima file gambar dengan format png, jpeg, atau jpg!');
    uploadImg.type = '';
    uploadImg.type = 'file';
  }
};