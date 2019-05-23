<style>
    #active_contact{
        color: white;
    }
</style>
<br>
<br>
  <div id="inloggen" class="col-md-8"> 
    <form action="./index.php?content=bericht" method="post">
      <div class="form-group">
        <h1>Stuur je bericht hier:</h1>
        <br>
        <label for="email">E-mailadres</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
          placeholder="Voer uw e-mailadres in..." name="email">
        <small id="emailHelp" class="form-text text-muted">Wij zullen nooit uw e-mailadres delen met anderen.</small><br>

        <label for="email">Bericht</label><br>
        <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text">Bericht:</span>
          </div>
          <textarea name="bericht" class="form-control" rows="6" aria-label="Bericht" required></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Stuur op!</button><br>
    </form>