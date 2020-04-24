const main_img = document.getElementsByClassName('main_img');

const images = ['2chef_cooking', 'star5', 'chef_cooking', 'cake_table', 'cake_strewberry', 'cooking_spice', 'pancake', 'party', 'plate_food', 'plate_veg', 'roast', 'sliced_cake', 'wedding', 'vegan', 'vegetarian']

function change_img() {
  var image = images[Math.floor(Math.random() * images.length)];
  main_img[0].setAttribute("style", "background-image: url('img/home_slider/" + image + ".jpg')" );
}

window.setInterval(function(){
  change_img();
}, 5000);
