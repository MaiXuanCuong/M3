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
    return this._HttpClient.post<{access_token:string}>(api_url+'/login',data);
  }
  intercept(req: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
    // Get access_token from localStorage
    const access_token = localStorage.getItem('access_token');

    // Intercept every http request if the token exists
    if (access_token) {
      const cloned = req.clone({
        //  Add token to header of http request
        headers: req.headers.set('Authorization', 'Bearer '.concat(access_token))
      });
      return next.handle(cloned);
    }
    else {
      return next.handle(req);
    }
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
