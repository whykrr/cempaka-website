const { CNavItem } = require('@coreui/react')
const { FontAwesomeIcon } = require('@fortawesome/react-fontawesome')
const { faGaugeHigh } = require('@fortawesome/free-solid-svg-icons')

const _nav_main = {
  component: CNavItem,
  name: 'Dashboard',
  to: '/dashboard',
  icon: <FontAwesomeIcon icon={faGaugeHigh} className="nav-icon" />,
}

export default _nav_main
