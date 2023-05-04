import React, { useEffect } from 'react'
import { CPagination, CPaginationItem } from '@coreui/react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faAngleLeft, faAngleRight, faAnglesLeft, faAnglesRight } from '@fortawesome/free-solid-svg-icons'

const SmartPagination = (props) => {
  const { total, current } = props
  const mainItem = []
  // const [mainItem, setMainItem] = React.useState([])

  if (total > 0) {
    if (total <= 3) {
      for (let i = 1; i <= total; i++) {
        mainItem.push(i)
      }
    } else {
      if (current <= 2) {
        mainItem.push(1, 2, 3)
      } else if (current >= total - 1) {
        mainItem.push(total - 2, total - 1, total)
      } else if (current > 2 && current < total - 1) {
        mainItem.push(current - 2, current - 1, current, current + 1, current + 2)
      } else {
        mainItem.push(current - 1, current, current + 1)
      }
    }
  }

  if (total === 0) {
    return null
  }
  return (
    <CPagination size="sm" aria-label="Pagination" align="end">
      {current > 3 && (
        <CPaginationItem aria-label="First">
          <FontAwesomeIcon icon={faAnglesLeft} />
        </CPaginationItem>
      )}
      <CPaginationItem aria-label="Previous" disabled={current == 1}>
        <FontAwesomeIcon icon={faAngleLeft} />
      </CPaginationItem>
      {current > 3 && (
        <>
          <CPaginationItem>1</CPaginationItem>
          <CPaginationItem disabled>...</CPaginationItem>
        </>
      )}
      {mainItem.map((item) => (
        <CPaginationItem key={item} active={item == current}>
          {item}
        </CPaginationItem>
      ))}
      {current < total - 2 && (
        <>
          <CPaginationItem disabled>...</CPaginationItem>
          <CPaginationItem>{total}</CPaginationItem>
        </>
      )}
      <CPaginationItem aria-label="Next" disabled={current == total}>
        <FontAwesomeIcon icon={faAngleRight} />
      </CPaginationItem>
      {current < total - 2 && (
        <CPaginationItem aria-label="Last">
          <FontAwesomeIcon icon={faAnglesRight} />
        </CPaginationItem>
      )}
    </CPagination>
  )
}

export default React.memo(SmartPagination)
