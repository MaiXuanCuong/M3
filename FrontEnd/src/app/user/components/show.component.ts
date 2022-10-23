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
  id:any= 0;
  name:any= '';
  email:any= '';

  constructor(
    private _UserService:UserService,
    private _ActivatedRoute:ActivatedRoute,
    private _Router: Router,
  ) { }

  ngOnInit(): void {
    if(this._UserService.checkAuth()){
      this._ActivatedRoute.paramMap.subscribe(() => {
        this._UserService.profile().subscribe(res =>{
          this.id = res.id;
          this.name = res.name;
          this.email = res.email;
        },e=>{
          console.log(e);
        })
      })
    }
    else{
      this._Router.navigate(['']);
    }
  }
  onSubmit(){
      this._UserService.logout();
      this._Router.navigate(['']);
      alert("Đăng Xuất Thành Công")
  }
}