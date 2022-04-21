(function(){
  console.log("peepopeepopeepopeepopeepopeepo")  
  let boite__modale = document.querySelector(".boite__modale")
  let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir')
  console.log(cours__desc__ouvrir.length)  

  for (const bout of cours__desc__ouvrir) {
      bout.addEventListener('mousedown',function(){
        boite__modale.classList.add('boite__modale--ouvrir')

      })
  }

  boite__modale.addEventListener('mousedown', function(){
    boite__modale.classList.remove('boite__modale--ouvrir')
  })

  /*
this.parentNode
this.parentNode.children(2)
  */

})()