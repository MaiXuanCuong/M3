import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule } from '@angular/forms';
import { HttpClientModule,HTTP_INTERCEPTORS } from '@angular/common/http';
import { LoginComponent } from './user/components/login.component';
import { RouterModule } from '@angular/router';
import { UserModule } from './user/user.module';
import { JWTInterceptorService } from './user/jwtinterceptor.service';
@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule,
    RouterModule,
    UserModule
  ],
  providers: [ { provide: HTTP_INTERCEPTORS, useClass: JWTInterceptorService, multi: true },
    { provide: HTTP_INTERCEPTORS, useClass: JWTInterceptorService, multi: true },],
  bootstrap: [AppComponent]
})
export class AppModule { }
