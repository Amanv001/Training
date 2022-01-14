import { Component, OnInit } from '@angular/core';
import { UserService } from '../user.service';

@Component({
  selector: 'app-inactive-users',
  templateUrl: './inactive-users.component.html',
  styleUrls: ['./inactive-users.component.css']
})
export class InactiveUsersComponent implements OnInit{
  constructor(private userService: UserService){}

   users: string[];

  onSetToActive(id: number) {
    this.userService.setToActive(id);
  }

  ngOnInit(): void {
      this.users = this.userService.inactiveUsers;
  }
}
