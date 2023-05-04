import React from 'react'
import { CNavItem } from '@coreui/react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faTree } from '@fortawesome/free-solid-svg-icons'

const _nav_project = [
  {
    component: CNavItem,
    name: 'Project',
    to: '/project',
    icon: <FontAwesomeIcon icon={faTree} className="nav-icon" />,
  },
]

export default _nav_project
