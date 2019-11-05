<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- other scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    
    <form id="s_branch">
      <div class="form-row">
        <div class="col">
          <label>Select Branch</label>
          <select v-model="selected_branch" class="custom-select" >
            <option v-for='branch in branches' :value="branch">{{ branch.name }}</option>
          </select>
        </div>

        <div class="col">
          <label>Select Movie</label>
          <select class="custom-select" id="s_movie">
            <option v-for='movie in selected_branch.movies' :value="branches.movie" >{{ movie.movie }}</option>
          </select>
        </div>

      </div>
    </form>
  </body>
  <script>
    new Vue({
      el: '#s_branch',
      data:{
        selected_branch:'',
        branches:[
        {
          name: 'Cinema Baguio',
          movies:[
          {movie:'THE JOKER'},
          {movie:'INTERSTELLAR'},
          {movie:'SHAWSHANK REDEMPTION'},
          {movie:'PULP FICTION'},
          {movie:'FIGHT CLUB'},
          ]},

        {
          name: 'Star Baguio',
          movies:[
          {movie:'HELLO WORLD'},
          {movie:'INTERPLANET'},
          {movie:'SUPPORT REDEMPTION'},
          {movie:'FACT OF THE CENTURY'},
          {movie:'BALLS OF FURY'},
          ]},

        {
          name: 'MountainTop Cinema',
          movies:[
          {movie:'RED'},
          {movie:'MARS'},
          {movie:'CARRY'},
          {movie:'DON QUIXOTE'},
          {movie:'EXPENDABLES'},
          ]},

        {
          name: 'Ghibli Cinema',
          movies:[
          {movie:'CASTLE IN THE SKY'},
          {movie:'KIKIS DELIVERY SERVICE'},
          {movie:'PRINCESS MONONOKE'},
          {movie:'GRAVE OF THE FIREFLIES'},
          {movie:'THE WIND RISES'},
          ]},

        {
          name: 'LocaleLing Cinema',
          movies:[
          {movie:'HENERAL LUNA'},
          {movie:'KITA KITA'},
          {movie:'METRO MANILA'},
          {movie:'EKSTRA'},
          {movie:'MARIQUINA'},
          ]},
        
        ],
      }
    })
  </script>
</html>