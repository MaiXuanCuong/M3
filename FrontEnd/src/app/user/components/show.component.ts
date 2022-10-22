import { Component, OnInit } from '@angular/core';
import { User } from '../user';
import { UserService } from '../user.service';
import { ActivatedRoute, ParamMap } from '@angular/router';

import { Router } from '@angular/router';
import { FormControl, FormGroup, Validators } from '@angular/forms';
@Component({
  selector: 'app-productshow',
  templateUrl: './../templates/show.component.html',
})
export class ShowComponent implements OnInit {
  User!: User;

  constructor(
    private _UserService:UserService,
    private _ActivatedRoute:ActivatedRoute,
    private _Router: Router,
  ) { }

  ngOnInit(): void {
    this._ActivatedRoute.paramMap.subscribe(() => {
      this._UserService.profile().subscribe(res =>{
        this.User = res;
      },e=>{
        console.log(e);
      })
    })
  }
  onSubmit(){
      this._UserService.logout();
      this._Router.navigate(['']);
      alert("Đăng Xuất Thành Công")
  }
}