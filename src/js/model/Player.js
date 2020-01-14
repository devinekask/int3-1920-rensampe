
class Player {
  constructor(playerObject) {
    this.name = playerObject['Name'];
    this.image = playerObject['Photo'];
    this.age = playerObject['Age'];
    this.nationality = playerObject['Nationality'];
    this.club = playerObject['Club'];
  }

  createHTML() {
    return ` <li class='player'>
    <img src="${this.image.replace('/4/', '/10/')}" alt="Profile picture ${
  this.name}" class="player__pic">
    <span class='player__name'>${this.name}</span>
    <span class='player__stat'>${this.age} ${this.nationality}</span>
    <span class='player__info'>${this.club}</span>
    <span class='player__more'>more</span>
</li>`;
  }
}
export default Player;
