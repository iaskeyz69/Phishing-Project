function changeBackgroundImage() {
  const backgroundImageElement = document.querySelector(".bigger-box");
  const randomNumberGenerated = Math.floor(Math.random() * 4);
  const arrayOfBackgroundImagePaths = [
 
  ];

  backgroundImageElement.style.backgroundImage = `url(${arrayOfBackgroundImagePaths[randomNumberGenerated]})`;
}

changeBackgroundImage();
