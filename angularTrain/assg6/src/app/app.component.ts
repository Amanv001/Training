import { Component, ViewChild } from '@angular/core';
import { NgForm } from '@angular/forms';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'assg6';
  subscriptions = ['Basic','Medium','Pro'];
  selectedSubscription = 'Medium';

  @ViewChild('f') signForm: NgForm;
  formSubmit(){
    console.log(this.signForm.value);
  }
}
