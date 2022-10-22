import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { UserService } from '../user.service';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { User } from '../user';
@Component({
  selector: 'user-register',
  templateUrl: './../templates/register.component.html',
})
export class RegisterComponent implements OnInit {
  registerForm!: FormGroup;
  constructor(
    private _Router: Router,
    private _UserService: UserService,
  ) { }

  ngOnInit(): void {
    this.registerForm = new FormGroup({
      'name':new FormControl('',[
        Validators.required,
      ]),
      'email':new FormControl('',[  
        Validators.required,
        Validators.email,
      ]),
      'password': new FormControl('',[
        Validators.required,
        Validators.minLength(5)
      ]),
      // 'confirmPassword': new FormControl('',[
      //   Validators.required,
      //   Validators.minLength(5)
      // ]),
      
    })
  }
  onSubmit():void{
    let data = this.registerForm.value;
    let User: User = {
      name:data.name,
      email:data.email,
      password:data.password,
      // confirmPassword:data.confirmPassword
    }
    this._UserService.store(User).subscribe(()=>{
      this._Router.navigate(['']);
      alert("Đăng ký Thành Công")
    });
  }
}
