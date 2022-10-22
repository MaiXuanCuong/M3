import { NgModule } from '@angular/core';
import { RouterModule, Routes  } from '@angular/router';
import { ShowComponent } from './components/show.component';

import { LoginComponent } from './components/login.component';
import { RegisterComponent } from './components/register.component';
export const routes: Routes = [
  { path: '', component: LoginComponent },
  { path: 'register', component: RegisterComponent },
  { path: 'profile', component: ShowComponent,},
  { path: '**', redirectTo: '' }
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class UserRoutingModule { }
