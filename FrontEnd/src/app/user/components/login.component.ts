import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { UserService } from '../user.service';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { User} from '../user';
@Component({
  selector: 'user-login',
  templateUrl: './../templates/login.component.html',
})
export class LoginComponent implements OnInit {
  loginForm!: FormGroup;
  error: any;
  constructor(
    private _Router: Router,
    private _UserService: UserService,
  ) { }

  ngOnInit(): void {
    if(!this._UserService.checkAuth()){
    this.loginForm = new FormGroup({
      'email':new FormControl('',[
        Validators.required,
        Validators.email,
      ]),
      'password': new FormControl('',[
        Validators.required,
        Validators.minLength(5)
      ]),
    })
  } else {
    this._Router.navigate(['profile']);
  }
  }
  onSubmit():void{
    let data = this.loginForm.value;
    let User: User = {
      email:data.email,
      password:data.password,
    }
    this._UserService.login(User).subscribe(res =>{
      // console.log(res);
        localStorage.setItem('access_token', res.access_token);
        this._Router.navigate(['profile']);
        alert("Đăng Nhập Thành Công")
 
     
    }, err => {
      if(err.status === 401) {
        alert("Đăng Nhập Không Thành Công");
      }
      // 
      this.error = true;
      
    });
  }
}
