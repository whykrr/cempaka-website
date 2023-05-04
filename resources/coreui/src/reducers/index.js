import { combineReducers } from 'redux'
import sidebarReducer from './sidebar-reducer'
import authReducer from './auth-reducer'
import tableReducer from './table-reducer'
import navReducer from './nav-reducer'

export default combineReducers({
  sidebar: sidebarReducer,
  auth: authReducer,
  table: tableReducer,
  nav: navReducer,
})
