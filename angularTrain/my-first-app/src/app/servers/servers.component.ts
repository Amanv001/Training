import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-servers',
  templateUrl: './servers.component.html',
  styleUrls: ['./servers.component.css']
})
export class ServersComponent implements OnInit {
  
  allowNewServer = false;
  serverCreationStatus = "No Server created yet";
  ServerName = '';

  ServerId: number = 2;
  ServerStatus: string = 'Offline';

  getServerStatus(){
    return this.ServerStatus;
  }

  onUpdateServerName(event: Event){
    return this.ServerName = (<HTMLInputElement>event.target).value;
  }

  onCreateServer(){
    return this.serverCreationStatus = "Server Created";
  }

  constructor() {
    setTimeout(() => {
      this.allowNewServer = true
    },2000);
   }

  ngOnInit(): void {
  }

}
