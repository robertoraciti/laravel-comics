<main>
    <section class="main-cont">
        <div class="container">

            <div class="cards-container">
              @foreach ($data['comics'] as $comic)
              <div class="card">
                  <img src="{{ $comic['thumb'] }}" alt="" />
                  <p>{{ $comic['series'] }}</p>
              </div>
                  
              @endforeach
            </div>
            <div class="btn">
              <button>LOAD MORE</button>
            </div>
        </div>
    </section>
  </main>

  <style lang="scss">
.main-cont {
    background-color: black;
    padding-top: 50px
}

.cards-container {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.main-cont .btn {
    width: 100%;
  text-align: center;
  margin-top: 50px;

}
.main-cont button {
  background-color: #0282f9;
  border: none;
  color: white;
  font-weight: bold;
  padding: 10px;
  width: 200px;
}

.card {
    width: 16%;
    height: 280px;
    margin-top: 30px;
    background-color: black ;

}
.card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    object-position: top;
}
.card p {
    margin: 10px 0;
    padding: 0;
    color: white;
}
</style>