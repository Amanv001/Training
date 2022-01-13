import { Component, OnInit } from '@angular/core';
import { Recipe } from '../recipe.model';

@Component({
  selector: 'app-recipe-list',
  templateUrl: './recipe-list.component.html',
  styleUrls: ['./recipe-list.component.css']
})
export class RecipeListComponent implements OnInit {

  recipes: Recipe[] = [
    new Recipe('A test Recipe','just for test','https://i.pinimg.com/originals/e4/6b/e6/e46be6459dc4d30cc535b68331d8b6e7.jpg')
  ];

  constructor() { }

  ngOnInit(): void {
  }

}
