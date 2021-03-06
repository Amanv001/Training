import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'assign4';

  oddNumber: number[] = [];
  evenNumber: number[] = [];

  onFired(firedNumber: number){
    // console.log(firedNumber);
    if (firedNumber % 2 === 0) {
      this.evenNumber.push(firedNumber);
    }
    else{
      this.oddNumber.push(firedNumber);
    }
  }
}
