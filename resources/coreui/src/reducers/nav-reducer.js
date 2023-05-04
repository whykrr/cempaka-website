import { CNavItem } from '@coreui/react'
import { navConstant } from '../utils/constants'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import * as Icons from '@fortawesome/free-solid-svg-icons'
import { library } from '@fortawesome/fontawesome-svg-core'
import { _nav_project, _nav_setting } from '../utils/navigations'

// load all icons fontawesome
const iconList = Object.keys(Icons)
  .filter((key) => key !== 'fas' && key !== 'prefix')
  .map((icon) => Icons[icon])

library.add(...iconList)

const initialState = {
  data: [],
}

const navReducer = (state = initialState, action) => {
  switch (action.type) {
    case navConstant.LOAD_NAV:
      if (action.model === navConstant.NAV_PROJECT) {
        return { ...state, data: _nav_project }
      } else if (action.model === navConstant.NAV_SETTING) {
        return { ...state, data: _nav_setting }
      }
      break
    case navConstant.REQUEST_NAV:
      return { ...state, nav: [] }

    case navConstant.REQUEST_NAV_SUCCESS:
      const dashboard = {
        component: CNavItem,
        name: 'Dashboard',
        to: '/admin/dashboard',
        icon: <FontAwesomeIcon icon="gauge-high" className="nav-icon" />,
      }
      const content = {
        component: CNavItem,
        name: 'Content',
        to: '/admin/content',
        icon: <FontAwesomeIcon icon="table" className="nav-icon" />,
      }
      const nav = action.payload.data.map((item) => {
        return {
          component: CNavItem,
          name: item.name,
          to: `admin/category/${item.slug}`,
          icon: <FontAwesomeIcon icon={item.icon} className="nav-icon" />,
        }
      })
      return { ...state, data: [dashboard, content, ...nav] }
    default:
      return state
  }
}

export default navReducer
