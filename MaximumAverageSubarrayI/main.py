import math

class Solution:
    def findMaxAverage(self, nums: List[int], k: int) -> float:        
        maxSum = -math.inf
        currentSum = 0

        for i in range(len(nums)):
            currentSum += nums[i]
            
            if i >= k - 1:
                maxSum = max(currentSum, maxSum)
                currentSum -= nums[i - (k - 1)]
            
        return maxSum / k