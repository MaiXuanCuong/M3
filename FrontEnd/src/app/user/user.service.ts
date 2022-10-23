import { Injectable } from '@angular/core';
import { HttpClient, HttpEvent, HttpHandler, HttpRequest} from '@angular/common/http';
import { User } from './user';
import { Observable } from 'rxjs';
import { environment } from 'src/environments/environment';
import { Router } from '@angular/router';
let api_url = environment.api_url;
@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(
    private _HttpClient: HttpClient,
    private _Router: Router
    ) { 

  }
  store(data:User){
    return this._HttpClient.post<User>(api_url+'/register',data);
  }
  login(data:User){
    return this._HttpClient.post<{access_token: string}>(api_url+'/login',data);
  }
  
  profile():Observable<User>{
    return this._HttpClient.get<User>(api_url+'/profile');
  }
  logout(){
    localStorage.removeItem('access_token');
    this._Router.navigate(['']);
  }
  checkAuth():any{
    let token = localStorage.getItem('access_token');
    return token;
  }

}
