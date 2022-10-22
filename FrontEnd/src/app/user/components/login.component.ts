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
  constructor(
    private _Router: Router,
    private _UserService: UserService,
  ) { }

  ngOnInit(): void {
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
  }
  onSubmit():void{
    let data = this.loginForm.value;
    let User: User = {
      email:data.email,
      password:data.password,
    }
    this._UserService.login(User).subscribe(()=>{
      this._Router.navigate(['profile']);
      alert("Đăng Nhập Thành Công")
    });
  }
}
