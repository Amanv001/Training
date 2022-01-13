import { Component, EventEmitter, OnInit, Output } from '@angular/core';

@Component({
  selector: 'app-game-control',
  templateUrl: './game-control.component.html',
  styleUrls: ['./game-control.component.css']
})
export class GameControlComponent implements OnInit {

  interval: any;
  @Output() intervalFlag = new EventEmitter<number>();
  log = 0;

  Onstart(){
    this.interval = setInterval(() => {
        this.intervalFlag.emit(this.log + 1);
        this.log++;
    }, 1000);
  }

  Onpause(){
    clearInterval(this.interval);
  }

  constructor() { }

  ngOnInit(): void {
  }

}
